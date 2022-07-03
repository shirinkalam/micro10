<?php
#Front Controller
use App\Utilities\Url;
use App\Core\StupidRouter;
include 'bootstrap/init.php';

$router= new StupidRouter();
$router->run();