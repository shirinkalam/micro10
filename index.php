<?php
#Front Controller
use App\Core\Routing\Route;
use App\Core\Routing\Router;
include 'bootstrap/init.php';

// var_dump(Route::routes());

$router = new \App\Core\Routing\Router();
$router->run();