<?php
class Task extends Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        require 'models/login_model.php';
        $model = new Login_Model();
        $this->view->render('task/index');
    }
}