<?php
use App\Core\Routing\Route;

Route::get('/null');

Route::add(['get' ,'post','put'], '/a' , function(){
    echo 'Welcome';
});

Route::post('/b' , function(){
    echo 'save Ok';
});

Route::put('/c' ,['Controller' , 'Method']);
Route::put('/d' ,'Controller@Method');


