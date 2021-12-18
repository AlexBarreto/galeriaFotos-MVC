<?php

  namespace Controllers;

  class NovaFotoController extends Controller{

/*

Responsável em renderizar a view Nova Foto

>>
*/ 
    public function __construct(){

      $this->view = new \Views\MainView('NovaFoto');

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

      $this->view->render(array('titulo'=>'NovaFoto'));
    }


  }

?>