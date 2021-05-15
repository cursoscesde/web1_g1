<?php
// 1. iniciar servicio de session
session_start();
// preguntar por los datos de sesión
if ($_SESSION['rol'] != 'admin') {
    $pageToRedirect = "/web1_g1/clase_13_03_2021_formularios/pages/login.php";
    header("Location: {$pageToRedirect}");
    exit;
}
?>

<?php include_once("../static/layouts/header.php") ?>
<div class="container">
    <div class="mt-5"></div>
    <form onsubmit="return taskValidation()" method="POST" action="create_task.php">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre tarea</label>
            <input type="text" class="form-control" id="task" aria-describedby="emailHelp" name="task">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Descripción</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Fecha</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
<?php include_once("../static/layouts/footer.php")?>