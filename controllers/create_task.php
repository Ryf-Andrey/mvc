<?php
class Create_task extends Controller {
    public function __construct() {
        //echo "Мы в контроллере Create_task";
        parent::__construct();
    }

    public function index() {
        $this->view->render('create_task/index');
    }
    public function newTask(){
            require 'models/task_model.php';
            $model = new Task_Model();
            $model->create();
    }
}
