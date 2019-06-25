<?php



require_once 'controller/ProductsController.php';
//require_once 'routes.php';
require_once 'utility/utility.php';
require_once "controller/Login.Controller.php";

//function __autoload($class_name) {
  //  require_once 'classes/'.$class_name.'.php';
    //echo $class_name;
//}


$controller = new ProductsController();
$controller->handleRequest();