<?php
class Task_Model extends Model {
    public function __construct() {
        parent::__construct();
    }
    public function create() {
        $sth = $this->db->prepare("INSERT INTO tasks (text, user_login, user_email) VALUES (:text, :user_login, :user_email)");
        $sth->execute(array(
            ':text' => $_POST['text_task'],
            ':user_login' => $_POST['user_login'],
            ':user_email' => $_POST['user_email'],
        ));
        Session::set('addTaskSuccess', 'You added New TASK');
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
