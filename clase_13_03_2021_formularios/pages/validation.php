<?php include_once("../static/layouts/header.php") ?>

<?php
    
    $correo = $_POST['correo'];
    $password = $_POST['contrasena'];
    if(strlen($password) < 5){
        echo "La contraseña debe contener más de 5 carácteres {$password[0]}";
    }
    else{
        echo "La contraseña es: {$password[0]}";
    }

?>
<?php include_once("../static/layouts/footer.php") ?>