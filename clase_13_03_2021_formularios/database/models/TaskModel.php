<?php

require_once "{$_SERVER['DOCUMENT_ROOT']}/web1_g1/clase_13_03_2021_formularios/database/DBConnection.php";

class TaskModel
{
    private $db = NULL;
    public function __construct()
    {
        //creo el objeto de conexión
        $dbConnection = new DBConnection();
        // obtengo la conexión
        $this->db = $dbConnection->connect();
    }
    public function insert($task, $description, $date)
    {
        if ($this->db->connect_errno) {
            echo "Falló la conexión a MYSQL";
            exit();
        } else {
            echo "Conexión correcta";
            $sql = "INSERT INTO tasks (task, description, date) VALUES ('{$task}','{$description}','{$date}')";
            if ($this->db->query($sql) === TRUE) {
                echo "Tarea creada con éxito";
            } else {
                echo "Hubo un error crear la tarea";
            }
            $this->db->close();
        }
    }
    public function listTasks(){
        $sql = "SELECT * FROM tasks";
        $result = $this->db->query($sql);
        $this->db->close();
        return $result;
    }

    public function deleteTask($id){
        $sql = "DELETE FROM tasks WHERE id={$id}";
        if ($this->db->query($sql) !== TRUE) {
            echo "Hubo un error crear la tarea";
        }
        $this->db->close();
    }

    public function getTask($id){
        $sql = "SELECT * FROM tasks WHERE id={$id}";
        $result = $this->db->query($sql);
        $this->db->close();
        return $result;
    }
    public function updateTask($data){
        $sql = "UPDATE tasks SET task='{$data['task']}', description='{$data['description']}', date='{$data['date']}' WHERE id={$data['id']}";
        if ($this->db->query($sql) !== TRUE) {
            echo "Hubo un error crear la tarea";
        }
        $this->db->close();
    }
}
