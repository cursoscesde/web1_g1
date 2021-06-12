<?php

if($_SERVER['REQUEST_METHOD'] == 'GET'){

    require_once "{$_SERVER['DOCUMENT_ROOT']}/web1_g1/api_rest/database/models/UserModel.php";
    $userModel = new UserModel();
    $id = $_GET['id'];
    $user = $userModel->getUser($id);
    echo json_encode($user);
}