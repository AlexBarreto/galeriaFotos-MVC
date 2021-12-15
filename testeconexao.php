<?php

namespace Models;

//use \PDO;
//use \PDOException;




class DataBase{

  /*
 Dados de conexâo ao Mysql

 */ 
  const HOST = 'localhost';

  const DB = 'galeria';

  const USER = 'root';

  const PASS = '';

  private $pdo;

    /*

Função responsavel pela conexão

 */ 

  static function setConnection(){
      try {
        $this -> pdo = new PDO('mysql:host='.self::HOST.';dbname='.self::DB,self::USER,self::PASS,array(PDO::
        MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $this -> pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo '<h1>Erro ao conectar...</h1>';
    }

  }


  private function query($moeda,$quantidade,$valor,$data,$usuario_id){
    $sql_insert = $this->pdo->prepare("INSERT INTO `ordem_cripto` VALUES (null, ?,?,?,?,?)");
    $sql_insert->execute(array($moeda,$quantidade,$valor,$data,$usuario_id));
  }
  
  public function insertDados($moeda,$quantidade,$valor,$data,$usuario_id){
    $this->setConnection();
    $this->query($moeda,$quantidade,$valor,$data,$usuario_id);
    $sql_consult = $this->pdo->prepare("SELECT * FROM `ordem_cripto`");
    $sql_consult->execute();
    $dados = $sql_consult->fetchAll();
    return $dados;
  }

  public function consultarDados(){
    $this->setConnection();
    $sql_consult = $this->pdo->prepare("SELECT * FROM `ordem_cripto`");
    $sql_consult->execute();
    $dados = $sql_consult->fetchAll();
    return $dados;
    }
    
    public function deletarDados($id){
      $this->setConnection();
      $sql_consult = $this->pdo->prepare("DELETE FROM `ordem_cripto` WHERE id=?");
      $sql_consult->execute(array($id));
      }


  private function queryUsuario($nome,$sobrenome,$email,$senha){
    $sql_insert = $this->pdo->prepare("INSERT INTO `login` VALUES (null, ?,?,?,?)");
    $sql_insert->execute(array($nome,$sobrenome,$email,$senha));
  }
  
  public function consultarUsuariosInserir($email){
    $this->setConnection();
    $sql_consult = $this->pdo->prepare("SELECT * FROM `login`");
    $sql_consult->execute();
    $dados = $sql_consult->fetchAll();
    for($i = 0; $i < count($dados);$i++ ){
      if($email == $dados[$i]['email']){
        echo '</br><div class="alert alert-danger m-3" role="alert">
        Já existe um usuário com este email!
      </div><div class = "m-3"><a m-3 href="cadastro.php"><button  class="btn btn-primary " type="button">Voltar</button></a></div>';
      exit;
      }
    }

    echo '</br><div class="alert alert-success m-3" role="alert">
    Cadastro realizado com sucesso! Volte para fazer o login.
    </div>';

    
    return $dados;
    }

    public function consultarUsuariosLogar($email,$senha){
      $this->setConnection();
      $sql_consult = $this->pdo->prepare("SELECT * FROM `login`");
      $sql_consult->execute();
      $dados = $sql_consult->fetchAll();
      $usuario_id = 'a';

      for($i = 0; $i < count($dados);$i++ ){
        if($email == $dados[$i]['email'] & $senha == $dados[$i]['senha']){
          $usuario_id = $dados[$i]['id']; 
        }
        
      }
      if($usuario_id == 'a'){
        echo '<link href="css/bootstrap.css" rel="stylesheet" /></br><div class="alert alert-danger m-3" role="alert">
        Você errou o email ou senha! Volte para tentar novamente.
        </div><div class = "m-3"><a m-3 href="index.php"><button  class="btn btn-primary " type="button">Voltar</button></a></div>';
        exit;
      }
      return $usuario_id;
      
        
  }
  
    public function insertUsuario($nome,$sobrenome,$email,$senha){
    $this->setConnection();
    $this->queryUsuario($nome,$sobrenome,$email,$senha);
  }
  
  
}

?>