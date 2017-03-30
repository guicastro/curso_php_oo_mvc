<?php

/*#######################

	Model - contém todas as classes das regras de negócio da aplicação (consultas, tratamentos, etc)

	View - parte visual da aplicação (HTML, CSS, listagens do PHP, etc)

	Controller - recebe as chamadas da aplicação e define as rotas e quais camada serão acionadas (model ou view)

	Ex: www.app.com/home
	- Controller -> Action (Model) -> View
	- Controller chama um método no model e retorna na view, sendo esta uma rotina básica, podendo ser diferente em cada aplicação

	- Para instalar o composer somente na aplicação, entre em https://getcomposer.org/download/ e siga as orientações do Download Composer
	- "php composer.phar install" vai instalar todas as bibliotecas e classes e configurar para uso
	- Rotas em MVC são as páginas, ou seja, você define uma configuração para cada rota que será posteriormente "chamada"

#######################*/

require_once("../vendor/autoload.php");

$route = new \App\Route;

echo $route->getUrl();