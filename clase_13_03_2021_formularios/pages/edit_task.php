<?php include_once("../static/layouts/header.php") ?>
<?php
    require_once "{$_SERVER['DOCUMENT_ROOT']}/web1_g1/clase_13_03_2021_formularios/database//models/TaskModel.php";
    $id = $_GET['id'];
    $taskModel = new TaskModel();
    $result = $taskModel->getTask($id);
    $task = $result->fetch_assoc();
?>
<div class="container">
    <div class="mt-5"></div>
    <form onsubmit="return taskValidation()" method="POST" action="update_task.php?id=<?php echo $task['id']; ?>">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre tarea</label>
            <input type="text" value="<?php echo $task['task'];?>" class="form-control" id="task" aria-describedby="emailHelp" name="task">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Descripción</label>
            <input type="text" value="<?php echo $task['description'];?>" class="form-control" id="description" name="description">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Fecha</label>
            <input type="date" value="<?php echo $task['date'];?>" class="form-control" id="date" name="date">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
<?php include_once("../static/layouts/footer.php") ?>