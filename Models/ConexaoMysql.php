<?php

namespace Models;

use \PDO;
use \PDOException;

class ConexaoMysql{

  /*
 Dados de conexâo ao Mysql

 */ 
  const HOST = 'localhost';

  const DB = 'galeria';

  const USER = 'root';

  const PASS = '';


    /*

Função responsavel pela conexão

 */ 

  private static function setConnection(){
      try {
        $pdo = new PDO('mysql:host='.self::HOST.';dbname='.self::DB,self::USER,self::PASS,array(PDO::
        MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo '<h1>Erro ao conectar...</h1>';
    }
    return $pdo;

  }

      /*

Função responsavel pela consulta de todos dados

 */ 

  
  public function consultarDadosAll(){
    $this->setConnection();
    $sql_consult = $this->pdo->prepare("SELECT * FROM `info` INNER JOIN `imagens` ON `info`.`id_imagem` = `imagens`.`id`");
    $sql_consult->execute();
    $dados = $sql_consult->fetchAll(PDO::FETCH_ASSOC);
    return $dados;
    }

      /*

Função responsavel pela consulta de todos dados das imagens

 */ 

  
public static function consultarDadosImagens(){
  $pdo = self::setConnection();
  $sql_consult = $pdo->prepare("SELECT * FROM `imagens`");
  $sql_consult->execute();
  $dados = $sql_consult->fetchAll();
  return $dados;
  }

      /*

Função responsavel pela consulta de todos dados dos info

 */ 

  
public function consultarDadosInfo(){
  $this->setConnection();
  $sql_consult = $this->pdo->prepare("SELECT * FROM `info`");
  $sql_consult->execute();
  $dados = $sql_consult->fetchAll();
  return $dados;
  }

      /*

Função responsavel para inserir dados da imagem

 */ 

    
public static function inserirImagem($nome){
  $pdo = self::setConnection();
  $sql_inserir = $pdo->prepare("INSERT INTO `imagens` VALUES (null, ?)");
  $sql_inserir->execute(array($nome));
      
}

/*

Função responsavel para inserir dados da descricao da imagem

 */ 

    
public static function inserirDescricaoImagem($descricao,$id_imagem){
  $pdo = self::setConnection();
  $sql_inserir = $pdo->prepare("INSERT INTO `info` VALUES (null, ?,?)");
  $sql_inserir->execute(array($descricao,$id_imagem));
  
}

}

