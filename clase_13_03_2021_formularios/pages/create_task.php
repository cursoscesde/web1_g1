<?php

// get data from form
$task = $_POST['task'];
$description = $_POST['description'];
$date = $_POST['date'];
if (!empty($task) || !empty($description) || !empty($date)) {
    // database connection
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "taskapp";
    $dbConnection = new mysqli($host, $username, $password, $database);
    if ($dbConnection->connect_errno) {
        echo "Falló la conexión a MYSQL";
        exit();
    } else {
        echo "Conexión correcta";
        $sql = "INSERT INTO tasks (name, description, date) VALUES ('{$task}','{$description}','{$date}')";
        if ($dbConnection->query($sql) === TRUE) {
            echo "Tarea creada con éxito";
        } else {
            echo "Hubo un error crear la tarea";
        }
        $dbConnection->close();
    }
}
else{
    echo "Todos los campos deben estar llenos";
}
