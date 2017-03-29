<?php

/*#######################

	- Para instalar o composer somente na aplicação, entre em https://getcomposer.org/download/ e siga as orientações do Download Composer
	- "php composer.phar install" vai instalar todas as bibliotecas e classes e configurar para uso
	- Rotas em MVC são as páginas, ou seja, você define uma configuração para cada rota que será posteriormente "chamada"

#######################*/

require_once("../vendor/autoload.php");

$route = new \App\Route;

echo $route->getUrl();