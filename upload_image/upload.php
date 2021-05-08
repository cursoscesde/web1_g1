<?php
$uploadsFolder = "uploads/";
if (isset($_POST['name']) && isset($_POST['email'])) {
    $filePath = $uploadsFolder . basename($_FILES['myFile']['name']);
    $fileType = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));
    $fileSize = $_FILES['myFile']['size'];
    if ($fileType != "jpg" and $fileType != "png" && $fileType != "pdf") {
        echo "formato de archivo invalido";
    } else {
        if($fileSize < 20000){
            move_uploaded_file($_FILES['myFile']['tmp_name'], $filePath);
        }
        else{
            echo "tamaño inálido, debe ser menor o gual a 20k";
        }
    }
} else {
    echo "Email y name deben estar llenos";
}
