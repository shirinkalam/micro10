<?php
#Front Controller
// use App\Core\Routing\Route;
// use App\Core\Routing\Router;
use App\Models\User;
// use App\Models\Product;

include 'bootstrap/init.php';

$user_data=[
    'name' =>"hadi",
    'email' =>"hadi@gmail.com",
    'password' =>"123456"
];

$userModel = new User();
$result = $userModel->create($user_data);
// $user = $userModel->getAll();
var_dump($result);

// $router = new \App\Core\Routing\Router();
// $router->run();

// $productModel = new Product();

// for($i = 1 ; $i<20 ; $i ++){
//     $productModel->create([
//         'id' => $i,
//         'title' =>"product-$i"
//     ]);
// }


