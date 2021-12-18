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
        $miniimagem = \Models\MostrarGaleria::mudaimagem();
        $descricao = \Models\MostrarDescricao::mudaimagem();

             
        $this->view->render(array(
          'indc'=> $miniimagem[0],
          'ind1'=> $miniimagem[1],
          'ind2'=> $miniimagem[2],
          'ind3'=> $miniimagem[3],
          'ind4'=> $miniimagem[4],
          'ind5'=> $miniimagem[5],
          'ind6'=> $miniimagem[6],
          'ind7'=> $miniimagem[7],
          'ind8'=> $miniimagem[8],
          'ind9'=> $miniimagem[9],
          'desc'=> $descricao[0],
          'des1'=> $descricao[1],
          'des2'=> $descricao[2],
          'des3'=> $descricao[3],
          'des4'=> $descricao[4],
          'des5'=> $descricao[5],
          'des6'=> $descricao[6],
          'des7'=> $descricao[7],
          'des8'=> $descricao[8],
          'des9'=> $descricao[9],
          'anterior' => $miniimagem[10],
          'proximo' => $miniimagem[11],
        ));



    }
  }
  
?>