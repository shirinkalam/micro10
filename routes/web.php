<?php
use App\Core\Routing\Route;

Route::get('/null');

Route::add(['get'], '/' , function(){
    echo 'Welcome';
});

Route::post('/saveForm' , function(){
    echo 'save Ok';
});

Route::put('/puturi' ,['Controller' , 'Method']);
Route::put('/puturi' ,'Controller@Method');


