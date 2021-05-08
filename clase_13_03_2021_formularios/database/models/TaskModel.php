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
}
