<?php
#Front Controller
use App\Core\Routing\Route;
use App\Core\Routing\Router;
use App\Models\User;
use App\Models\Product;

include 'bootstrap/init.php';

// $user_data=[
//     "id" => rand(5,1000),
//     "name" =>"nima"
// ];

// $userModel = new User();
// // $userMode->create($user_data);
// $user = $userModel->getAll();
// nice_dump($user);

// $router = new \App\Core\Routing\Router();
// $router->run();

$productModel = new Product();

for($i = 1 ; $i<20 ; $i ++){
    $productModel->create([
        'id' => $i,
        'title' =>"product-$i"
    ]);
}
