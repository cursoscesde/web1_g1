
<?php
require_once "{$_SERVER['DOCUMENT_ROOT']}/web1_g1/api_rest/database/DBConnection.php";
class UserModel{
    private $db = NULL;
    public function __construct()
    {
        //creo el objeto de conexión
        $dbConnection = new DBConnection();
        // obtengo la conexión
        $this->db = $dbConnection->connect();
    }
    public function insert(){

        $sql = "INSERT INTO users (email, password, name) VALUES('donjuan@gmail.com','123456', 'juan')";
        $this->db->query($sql);

    }
    public function getUser(){

    }

    public function getUsers(){
        if ($this->db->connect_errno) {
            echo "Falló la conexión a MYSQL";
            exit();
        } else {
            $sql = "SELECT * FROM users";
            $users = $this->db->query($sql);
            $this->db->close();
            $arrayUsers = array();
            while($row = mysqli_fetch_assoc($users)){
                array_push($arrayUsers, $row);
            }
            return $arrayUsers;
        }
    }
}