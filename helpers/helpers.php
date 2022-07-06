<?php

function site_url($route){
    return $_ENV['HOST'] . $route ;
}

function asset_url($route){
    return site_url('assets/' . $route);
}

function view($path, $data=[]){ #error 404
    extract($data);
    $path = str_replace('.','/',$path);
    $viewFullPath = BASEPATH . "views/$path.php";
    include_once $viewFullPath;
}

function strContains($str,$needle,$case_sensitive = 0){
    if($case_sensitive)
        $pos = strpos($str,$needle);
    else
        $pos = stripos($str,$needle);

    return ($pos !== false) ? true : false;
}

function nice_dump($var){
    echo "<pre style='border-radius:10px;padding:10px;display:block;text-align:left;direction:ltr;backgroud-color:#fff;border:1px solid black;border-left:7px solid black'>";
    var_dump($var);
    echo "</pre>";
}

function nice_dd($var){
    nice_dump($var);
    die();
}