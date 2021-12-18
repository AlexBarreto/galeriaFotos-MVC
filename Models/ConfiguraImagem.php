<?php

  namespace Models;



  class ConfiguraImagem{

    private static $NewWidthFoto = 1920;

    private static $NewHeightFoto = 1080;

    private static $caminhoImagem;

    private static $imagem;

    private static $nova_imagem;

    /*

      ´Método responsável para redimensionar a imagem

    */

    public static function Redimensiona($nomefile){

      self::$caminhoImagem = ('img/'.$nomefile);

      self::$imagem = imagecreatefromjpeg(self::$caminhoImagem);
      
      list( $widthFoto, $heightFoto) = getimagesize(self::$caminhoImagem);

      self::$nova_imagem = imagecreatetruecolor(self::$NewWidthFoto, self::$NewHeightFoto);

      imagecopyresampled(
        self::$nova_imagem, // Nova imagem 
        self::$imagem, // Imagem original
        0, // Coordenada X da nova imagem
        0, // Coordenada Y da nova imagem 
        0, // Coordenada X da imagem 
        0, // Coordenada Y da imagem  
        self::$NewWidthFoto, // Nova largura
        self::$NewHeightFoto, // Nova altura
        $widthFoto, // Largura original
        $heightFoto // Altura original
    );

    imagejpeg( self::$nova_imagem, 'img/'.$nomefile, 100 );
    imagedestroy(self::$imagem);
    imagedestroy(self::$nova_imagem);

    list( $widthFoto, $heightFoto) = getimagesize(self::$caminhoImagem);

      
    }

  }