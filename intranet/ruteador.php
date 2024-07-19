<?php 
include_once("controller/controler_".$controller.".php");
$objController="Controler".ucfirst($controller);
$controller= new $objController();
$controller->$action();
