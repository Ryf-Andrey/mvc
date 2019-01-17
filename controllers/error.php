<?php
  class Error extends Controller{
   public function __construct() {
       echo "Мы в контроллере error";
       parent::__construct();
      // $this->view->render('error/index');
   }

      public function index() {
          $this->view->render('error/index');
      }
  }
