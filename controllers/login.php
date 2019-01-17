<?php
class Login extends Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        require 'models/login_model.php';
        $model = new Login_Model();
        $this->view->render('login/index');
    }
    public function run() {
        require 'models/login_model.php';
        $model = new Login_Model();
        $model->run();
    }
}
