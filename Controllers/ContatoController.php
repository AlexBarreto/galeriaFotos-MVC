<?php

  namespace Controllers;

  class ContatoController extends Controller{

/*

Responsável em renderizar as views

>>
*/ 
    public function __construct(){

      $this->view = new \Views\MainView('contato');

    }
    public function executar(){
      $this->view->render(array('titulo'=>'Contato'));
    }
  }

?>