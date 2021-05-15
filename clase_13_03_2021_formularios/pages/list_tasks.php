<?php include_once("../static/layouts/header.php") ?>

<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">task</th>
            <th scope="col">date</th>
            <th scope="col">action</th>
        </tr>
    </thead>
    <tbody>
        <?php
            require_once "{$_SERVER['DOCUMENT_ROOT']}/web1_g1/clase_13_03_2021_formularios/database/models/TaskModel.php";
            $taskModel = new TaskModel();
            $tasks = $taskModel->getTasks();
            while($row = mysqli_fetch_assoc($tasks)){
                $template = "<tr>
                    <th scope='row'>{$row['id']}</th>
                    <td>{$row['task']}</td>
                    <td>
                        <img src='{$row['date']}' style='width: 100px; height: 100px'>
                    </td>
                    <td>
                        <a href='edit_task.php?id={$row['id']}'>Edit</a>
                    </td>
                </tr>";
                echo $template;
            }
        ?>
    </tbody>
</table>

<?php include_once("../static/layouts/footer.php") ?>