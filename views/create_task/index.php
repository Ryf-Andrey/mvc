<?php
if(!empty(Session::get('addTaskSuccess'))){
    echo Session::get('addTaskSuccess');
}
?>
<div class="container">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <h1>Create task</h1>
            <form action="create_task/newTask" method="post">
                <div class="form-group">
                    <label>Text</label>
                    <input type="text" class="form-control" name="text_task" required>
                </div>
                <div class="form-group">
                    <label>User Login</label>
                    <input type="text" class="form-control" name="user_login" required>
                </div>
                <div class="form-group">
                    <label>user_email</label>
                    <input type="email" class="form-control" name="user_email" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>
