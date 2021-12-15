<?php
/*
Sistema MVC

M = Model
V = View
C = Controler
Exemplo:
/contato
Contato controller => Controlador geral. Podemos executar o modelo e a view.
Contato View => Responsavel por rendenrizar a página
Contato Model => Onde tem todsa as funções necessárias
*/


/*

Autoload é responsável em carregar as view dinâmicamente

*/

$autoload = function($class){
  include($class.'.php');
};

spl_autoload_register($autoload);

$app = new App();

$app -> executar();


?>