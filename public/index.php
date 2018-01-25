<?php

session_start();

require_once '../vendor/autoload.php';


$url=$_SERVER['REQUEST_URI'];
$url=explode('?',$url);
$url=explode('/',$url[0]);
$url[1]=trim($url[1]);
$url[2]=trim($url[2]);
//var_dump($url);
if(isset($url[1])&& $url[1]!='')
{
    $controller=$url[1].'Controller';
    if (isset($url[2])&& $url[2]!=''){
$metod= $url[2];
    }
    else{
        $metod='index';
    }
}
else
{
    $controller='ProductController';
    $metod='index';
}
$controller='App\Controllers\\'.$controller;
$controller=new $controller();
$controller->$metod();