<?php
require_once "{$_SERVER['DOCUMENT_ROOT']}/web1_g1/api_rest/database/models/UserModel.php";
if($_SERVER['REQUEST_METHOD'] == 'DELETE'){
    
    $userModel = new UserModel();
    $dataInput =  file_get_contents('php://input');
    $data = json_decode($dataInput);
    $userModel->deleteUser($data->id);
    $response = array("status" => "ok");
    echo json_encode($response);
}
else{
    $error = array(
        "status" => "error",
        "error" => "Metodo de conexión inválido"
    );
    echo json_encode($error);
}