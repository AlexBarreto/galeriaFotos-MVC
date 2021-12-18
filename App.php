<?php

/*

Constante do path full das páginas.
>>
*/

define('INCLUDE_PATH_FULL','http://localhost/galeriaFotos-MVC/Views/pages/');


class App{

/*

Responsável em carregar a classe controladora
das paginas que estamos visualizando;
>>
*/

  public function executar(){
    $url = isset($_GET['url'])? explode('/',$_GET['url'])[0] : 'Home';
    $url = ucfirst($url);
    $url.="Controller";

    if(file_exists("Controllers/{$url}.php")){
      $className = "Controllers\\{$url}";
      $controler = new $className();
      $controler->executar();
    }else{
      die('Não existe esse controller!');
    }
  }
}



?> 