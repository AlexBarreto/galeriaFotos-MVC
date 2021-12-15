<?php

  namespace Controllers;

  class HomeController{

/*

Responsável em renderizar a view Home

>>
*/ 
    public function __construct(){

      $this->view = new \Views\MainView('Home');

    }

    public function executar(){
    
      $this->view->render(array('titulo'=>'Home'));
      

    }
  }

?>