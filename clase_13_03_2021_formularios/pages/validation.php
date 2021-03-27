<?php include_once("../static/layouts/header.php") ?>

<?php
    $email = $_POST['email'];
    $fullname = $_POST['fullname'];
    $test = "";
    if(empty($email) || empty($fullname)){
        echo "Todos los campos deben estar llenos";
    }
    else if(strlen($fullname) < 5){
        echo "nombre completo incorrecto";
    }
    else{
        echo "Gracias por su tiempo";
    }
?>
<?php include_once("../static/layouts/footer.php") ?>