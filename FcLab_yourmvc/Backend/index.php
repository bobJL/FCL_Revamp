<?php



require_once 'controller/ProductsController.php';

require_once 'utility/utility.php';


$controller = new ProductsController();
$controller->handleRequest();