<?php
use App\Core\Routing\Route;

Route::get('/' , 'HomeController@index');

Route::add(['get' ,'post','put'], '/a' , function(){
    echo 'Welcome';
});

Route::get('/b' , function(){
    echo 'save Ok';
});

Route::put('/c' ,['Controller' , 'Method']);
Route::put('/d' ,'Controller@Method');


