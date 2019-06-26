<?php



require_once 'controller/ProductsController.php';

require_once 'utility/utility.php';

require_oncem 'controller/login.controller.php'


$controller = new ProductsController();
$controller->handleRequest();