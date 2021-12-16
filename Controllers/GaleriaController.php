<?php

  namespace Controllers;

  class GaleriaController extends Controller{

/*

Responsável em renderizar a view galeria

>>
*/ 
    public function __construct(){

      $this->view = new \Views\MainView('Galeria');

    }
    public function executar(){
      if(isset($_POST['acao'])){
        $nomefile = \Models\VerificaFormulario::verificaImagem();
        $img = \Models\ConfiguraImagem::redimensiona($nomefile);
        $descricao = [$_POST['descricao']][0];
        \Models\ConexaoMysql::inserirImagem($nomefile);
        \Models\VerificaFormulario::verificaId_imagem();
        $id_imagem = \Models\VerificaFormulario::verificaId_imagem();
        \Models\ConexaoMysql::inserirDescricaoImagem($descricao,$id_imagem);
      }

    $this->view->render(array('titulo'=>'Galeria'));
    }
  }

?>