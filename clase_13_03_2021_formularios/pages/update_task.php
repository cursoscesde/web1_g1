<?php

require_once "{$_SERVER['DOCUMENT_ROOT']}/web1_g1/clase_13_03_2021_formularios/database/models/TaskModel.php";
$taskModel = new TaskModel();

$id = $_GET['id'];
$task = $_POST['task'];
$description = $_POST['description'];
$date = $_POST['date'];
$taskModel->updateTask($id, $task, $description, $date);
header("Location: list_tasks.php"); // redirección