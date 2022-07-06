<?php
#Front Controller
use App\Core\Routing\Route;
use App\Core\Routing\Router;
include 'bootstrap/init.php';

// var_dump(Route::routes());

$router = new \App\Core\Routing\Router();
$router->run();


// $route = '/post/{slug}';
// $pattern="/^". str_replace(['/','{','}'] , ['\/','(?<','>[-%\w]+)'],$route) ."$/";

// nice_dump($route);
// nice_dump($pattern);
// nice_dump('/^\/post\/(?<slug>[-%\w]+)$/');
// $route_pattern = '/^\/post\/(?<slug>[-%\w]+)$/';


// $uri1='/post/what-is-php';
// $uri2 = '/post/why-you-must-choose';
// $uri3='/product/course-php';


// $result = preg_match($route_pattern,$uri1,$matchs);
// nice_dump($matchs);
