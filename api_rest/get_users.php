<?php

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    require_once "{$_SERVER['DOCUMENT_ROOT']}/web1_g1/api_rest/database/models/UserModel.php";
    $userModel = new UserModel();
    $users = $userModel->getUsers();
    $user = array(
        "status" => "ok",
        "totalResults" => count($users),
        "data" => $users
    );
    echo json_encode($user);
}
else{
    $error = array(
        "status" => "error",
        "error" => "Metodo de conexión inválido"
    );
    echo json_encode($error);
}



