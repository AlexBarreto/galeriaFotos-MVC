<?php

  namespace Models;



  class VerificaFormulario{

    private static $widthFoto = 1920;

    private static $heightFoto = 1080;

    

    public static function verificaImagem(){

      if(isset($_FILES['foto']) & $_FILES['foto']['type'] == 'image/jpg' || $_FILES['foto']['type'] == 'image/jpeg'){

        $nomefile = md5($_FILES['foto']['name'].rand(1,999)).'.jpg';
        move_uploaded_file($_FILES['foto']['tmp_name'], 'img/'.$nomefile);
        echo '<div class="alert alert-success" role="alert">Imagem carregada com sucesso!</div>';

      }else{
        echo "Carregue um arquivo no formato JPEG ou JPG!";
        exit;
      }
      return $nomefile;
    }



    public static function verificaId_imagem(){

      $dadosImagens = ConexaoMysql::consultarDadosImagens();
            
      if(isset(end($dadosImagens)['id']) > 0){
      
        $id_imagem  =  end($dadosImagens)['id'];
      
      }
      return $id_imagem;
    }

  }
?>

