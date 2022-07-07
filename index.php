<?php
#Front Controller
// use App\Core\Routing\Route;
// use App\Core\Routing\Router;
use App\Models\User;
use App\Models\Product;

include 'bootstrap/init.php';


$productModel = new Product();

// for($i =1 ;$i<=7;$i++){
//     $productModel->create([
//         'title' =>"Product-$i",
//         'price' =>rand(1,100)*1000
//     ]);
// }
// $result = $userModel->delete(['name'=>'mahdi'],['id'=>1]);

// $router = new \App\Core\Routing\Router();
// $router->run();
