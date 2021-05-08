<?php include_once("../static/layouts/header.php"); ?>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Taks</th>
                <th scope="col">Description</th>
                <th scope="col">Date</th>
                <th scope="col">Accción</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                require_once "{$_SERVER['DOCUMENT_ROOT']}/web1_g1/clase_13_03_2021_formularios/database/models/TaskModel.php";
                $taskModel = new TaskModel();
                $tasks = $taskModel->listTasks();
                while($row = mysqli_fetch_assoc($tasks)){
                    $template = "
                    <tr>
                        <th scope='row'>{$row['id']}</th>
                        <td>{$row['task']}</td>
                        <td>{$row['description']}</td>
                        <td>{$row['date']}</td>
                        <td>
                            <a href='/web1_g1/clase_13_03_2021_formularios/pages/edit_task.php?id={$row['id']}' type='button' class='btn btn-primary'>Editar</a>
                            <a href='/web1_g1/clase_13_03_2021_formularios/pages/delete_task.php?id={$row['id']}' type='button' class='btn btn-danger'>eliminar</a>
                        </td>
                    </tr>";
                    echo $template;
                }
            ?>
            
        </tbody>
    </table>
</div>
<?php include_once("../static/layouts/footer.php"); ?>