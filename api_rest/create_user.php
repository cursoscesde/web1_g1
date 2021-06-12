<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once "{$_SERVER['DOCUMENT_ROOT']}/web1_g1/api_rest/database/models/UserModel.php";
    $userModel = new UserModel();
    $dataInput =  file_get_contents('php://input');
    $data = json_decode($dataInput);
    
    if ($data->username == '' || $data->email == '' || $data->password == '' || $data->role == '' || $data->section == '') {
        $error = array(
            "status" => "error",
            "error" => "Todos los campos deben estar llenos"
        );
        echo json_encode($error);
    }
    else{
        $userModel->insert($data->username, $data->email, $data->password, $data->role, $data->section);
        $response = array("status" => "ok");
        echo json_encode($response);
    }
} else {
    $error = array(
        "status" => "error",
        "error" => "Metodo de conexión inválido"
    );
    echo json_encode($error);
}
