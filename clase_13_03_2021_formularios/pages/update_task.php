<?php
require_once "{$_SERVER['DOCUMENT_ROOT']}/web1_g1/clase_13_03_2021_formularios/database//models/TaskModel.php";

$taskModel = new TaskModel();
$id = $_GET['id'];
$task = $_POST['task'];
$description = $_POST['description'];
$date = $_POST['date'];
$task = array(
    "id" => $id,
    "task" => $task,
    "description" => $description,
    "date" => $date
);
$taskModel->updateTask($task);
$pageToRedirect = "/web1_g1/clase_13_03_2021_formularios/pages/list_tasks.php";
header("Location: {$pageToRedirect}");
exit;
