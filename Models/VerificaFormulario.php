<?php

  namespace Models;

  class VerificaFormulario{


    public static function verificaArquivo(){

      if(isset($_FILES['foto'])){

        $nomefile = md5($_FILES['foto']['name'].rand(1,999)).'.jpg';
        move_uploaded_file($_FILES['foto']['tmp_name'], 'img/'.$nomefile);
      }
      return $nomefile;
    }

    public static function verificaId_imagem(){

      $dadosImagens = ConexaoMysql::consultarDadosImagens();

      if(count($dadosImagens) == 0 ){

        $id_imagem  = 1 ;
        
      }
            
      if(isset(end($dadosImagens)['id']) > 0){
      
        $id_imagem  =  end($dadosImagens)['id'] + 1;
      
      }
      return $id_imagem;
    }

  }
?>

