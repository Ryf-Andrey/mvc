<?php
class Task extends Model {
    public function __construct() {
        parent::__construct();
    }
    public function selectAll() {
        $stmt = $this->db->prepare("SELECT * FROM tasks");
        $stmt->execute();
        $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $arr;
    }
    public function sortLogin($user_login){
        $stmt = $this->db->prepare("SELECT * FROM tasks WHERE user_login = ?");
        $stmt->execute([$user_login]);
        $arr = $stmt->fetchAll();
        return $arr;
    }
    public function selectOne($task_id){
        echo $task_id;die;
        $stmt = $this->db->prepare("SELECT * FROM users WHERE id=?");
        $stmt->execute([$task_id]);
        $task = $stmt->fetch();
        return $task;

    }
}