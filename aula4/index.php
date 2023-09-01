<?php

$controller = $_GET['controller'];
$metodo = $_GET['acao'];

$controller .= "Controller";

require_once $_SERVER['DOCUMENT_ROOT'] . '/aula4/controller/EstudanteController.php';
//require_once $_SERVER['DOCUMENT_ROOT'] . 'aula4/controller/EstudanteController.php';

$objeto = new $controller();
$objeto->$metodo();
