<?php
$task_id = $_GET['task_id'];
//require 'models/task.php';
$model = new Task();

$task = $model->selectOne($task_id);
?>
<div class="container">
    <div class="row">
        <div class="col-sm-2">

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
                    <?php if(Session::get('loggedIn') == true):?>
                        <th scope="col">to change</th>
                    <?php endif; ?>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><?php echo $task['id']; ?></th>
                        <td><?php echo $task['text']; ?></td>
                        <td><a href="<?php echo URL; ?>index/sort_login/?user_login=<?php echo $task['user_login']?>"><?php echo $task['user_login']; ?></a></td>
                        <td><?php echo $task['user_email']; ?></td>
                        <td><?php if(!$task['status']) { echo 'Not done'; } else { echo 'Done';}?></td>
                        <td><input type="checkbox" value="not done"> not done</td>
                        <td>
                            <?php if(Session::get('loggedIn') == true):?>
                                <a href="<?php echo URL; ?>task/?task_id=<?php echo $task['id']?>">change</a>
                            <?php endif; ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-sm-2"></div>
    </div>
</div>