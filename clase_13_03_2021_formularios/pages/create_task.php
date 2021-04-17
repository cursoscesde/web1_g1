<?php
require_once "{$_SERVER['DOCUMENT_ROOT']}/web1_g1/clase_13_03_2021_formularios/database//models/TaskModel.php";
// get data from form
$task = $_POST['task'];
$description = $_POST['description'];
$date = $_POST['date'];
if (!empty($task) || !empty($description) || !empty($date)) {
    // database connection
    $taskModel = new TaskModel();
    $taskModel->insert($task, $description, $date);
}
else{
    echo "Todos los campos deben estar llenos";
}
