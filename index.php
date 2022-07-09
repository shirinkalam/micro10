<?php
#Front Controller
// use App\Core\Routing\Route;
// use App\Core\Routing\Router;
use App\Models\User;
use App\Models\Product;

include 'bootstrap/init.php';

$router = new \App\Core\Routing\Router();
$router->run();
