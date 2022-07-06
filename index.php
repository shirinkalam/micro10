<?php
#Front Controller
use App\Core\Routing\Route;
use App\Core\Routing\Router;
include 'bootstrap/init.php';

$router = new \App\Core\Routing\Router();
$router->run();

