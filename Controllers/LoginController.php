<?php

  namespace Controllers;

  class LoginController extends Controller{

/*

Responsável em renderizar a view login

>>
*/ 
    public function __construct(){

      $this->view = new \Views\MainView('Login');

    }
    public function executar(){
      $this->view->render(array('titulo'=>'Login'));
    }
  }

?>