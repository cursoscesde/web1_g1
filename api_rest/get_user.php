<?php

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $user = array(
        "status" => "ok",
        "user" => array(
            "name" => "juan",
            "email" => "juan@correo.com",
            "age" => 25,
        )
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



