<?php

  namespace Models;

  class MostrarDescricao{

    private static $nome_List;

    private static $dados;

  /*

  Função resposável para coletar os dados da descrição do banco conforme ordem do usuário e armazenar em array


  */

    private static function arrayimagens(){
      self::$dados = \Models\ConexaoMysql::consultarDadosAll();
      self::$nome_List = array();
      foreach(self::$dados as $key => $value){
        array_push(self::$nome_List, $value['descricao']);
      }
      return self::$nome_List;
    }

    public static function mudaimagem(){

     $imagem = self::arrayimagens();
  

      if (!isset($_GET['foto'])){
          $ind = 0;
          $ind1 = $ind+1;
          $ind2 = $ind+2;
          $ind3 = $ind+3;
          $ind4 = $ind+4;
          $ind5 = $ind+5;
          $ind6 = $ind+6;
          $ind7 = $ind+7;
          $ind8 = $ind+8;
          $ind9 = $ind+9;
          $ind10 = $ind+10;

      }else{
        $ind = (int) $_GET['foto'];
        if($ind < 0){
          $ind = 0;
          $ind1 = $ind+1;
          $ind2 = $ind+2;
          $ind3 = $ind+3;
          $ind4 = $ind+4;
          $ind5 = $ind+5;
          $ind6 = $ind+6;
          $ind7 = $ind+7;
          $ind8 = $ind+8;
          $ind9 = $ind+9;
          $ind10 = $ind+10;
        }

          if($ind == 0){
          $ind = 0;
          $antImagem = $ind-10;
          $proxImagem = $ind+10;
          $ind1 = $ind+1;
          $ind2 = $ind+2;
          $ind3 = $ind+3;
          $ind4 = $ind+4;
          $ind5 = $ind+5;
          $ind6 = $ind+6;
          $ind7 = $ind+7;
          $ind8 = $ind+8;
          $ind9 = $ind+9;
          $ind10 = $ind+10;
        }

        if($ind > count($imagem)){

          $ind = 0;
          $ind1 = $ind+1;
          $ind2 = $ind+2;
          $ind3 = $ind+3;
          $ind4 = $ind+4;
          $ind5 = $ind+5;
          $ind6 = $ind+6;
          $ind7 = $ind+7;
          $ind8 = $ind+8;
          $ind9 = $ind+9;
          $ind10 = $ind+10;

        }

          if($ind > 0){

          $ind1 = $ind+1;
          $ind2 = $ind+2;
          $ind3 = $ind+3;
          $ind4 = $ind+4;
          $ind5 = $ind+5;
          $ind6 = $ind+6;
          $ind7 = $ind+7;
          $ind8 = $ind+8;
          $ind9 = $ind+9;
          $ind10 = $ind+10;

        }
      }

     
      (isset($imagem[$ind1]) ? $img1 = $imagem[$ind1] : $img1 = $imagem[$ind]);
      (isset($imagem[$ind2]) ? $img2 = $imagem[$ind2] : $img2 = $imagem[$ind]);
      (isset($imagem[$ind3]) ? $img3 = $imagem[$ind3] : $img3 = $imagem[$ind]);
      (isset($imagem[$ind4]) ? $img4 = $imagem[$ind4] : $img4 = $imagem[$ind]);
      (isset($imagem[$ind5]) ? $img5 = $imagem[$ind5] : $img5 = $imagem[$ind]);
      (isset($imagem[$ind6]) ? $img6 = $imagem[$ind6] : $img6 = $imagem[$ind]);
      (isset($imagem[$ind7]) ? $img7 = $imagem[$ind7] : $img7 = $imagem[$ind]);
      (isset($imagem[$ind8]) ? $img8 = $imagem[$ind8] : $img8 = $imagem[$ind]);
      (isset($imagem[$ind9]) ? $img9 = $imagem[$ind9] : $img9 = $imagem[$ind]);
      (isset($imagem[$ind10]) ? $img10 = $imagem[$ind10] : $img10 = $imagem[$ind]);


      $arraydescricao  = array($img1,$img2,$img3,$img4,$img5,$img6,$img7,$img8,$img9,$img10);
      
      return $arraydescricao;
    }
    
  }


?>
