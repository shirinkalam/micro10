<?php
#Front Controller
use App\Utilities\Url;
include 'bootstrap/init.php';

$route = Url::current_route();

if($route == '/colors/blue')include BASEPATH . 'views/colors/blue.php';

if($route == '/colors/red')include BASEPATH . 'views/colors/red.php';

if($route == '/colors/green')include BASEPATH . 'views/colors/green.php';