<?php

function site_url($route){
    return $_ENV['HOST'] . $route ;
}

function asset_url($route){
    return site_url('assets/' . $route);
}

function view($path){ #error 404
    $path = str_replace('.','/',$path);
    $viewFullPath = BASEPATH . "views/$path.php";
    include_once $viewFullPath;
}