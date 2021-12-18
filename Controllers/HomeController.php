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
    
      $this->view->render(array('apresentacao'=>'Olá, seja bem vindo ao modelo do projeto em MVC, essa base MVC foi desenvolvida por Alex Barreto e faz parte de seu repositório github para uso pessoal.'));
      

    }
  }

?>