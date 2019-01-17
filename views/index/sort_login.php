<?php
$user_login = $_GET['user_login'];
require 'models/task.php';
$model = new Task();
$list_task = $model->sortLogin($user_login);
?>
<div class="container">
    <div class="row">
        <div class="col-sm-2">
            <a href="<?php echo URL; ?>index"><button>All List</button></a>
        </div>
        <div class="col-sm-8">
            <h1 class="text-center">List Task</h1>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">№</th>
                    <th scope="col">Text</th>
                    <th scope="col">Login</th>
                    <th scope="col">Email</th>
                    <th scope="col">Status</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($list_task as $task){ ?>
                    <tr>
                        <th scope="row"><?php echo $task['id']; ?></th>
                        <td><?php echo $task['text']; ?></td>
                        <td><?php echo $task['user_login']; ?></td>
                        <td><?php echo $task['user_email']; ?></td>
                        <td><?php if(!$task['status']) { echo 'Not done'; } else { echo 'Done';}?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="col-sm-2"></div>
    </div>
</div>