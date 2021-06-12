
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
    public function insert($username, $email, $password, $role, $section){

        $sql = "INSERT INTO users (username, email, password, role, section) VALUES('{$username}','{$email}','{$password}','{$role}', '{$section}')";
        $this->db->query($sql);
    }
    public function getUser($id){
        $sql = "SELECT username, email, role FROM users WHERE id={$id}";
        $users = $this->db->query($sql);
        return $users->fetch_assoc();
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