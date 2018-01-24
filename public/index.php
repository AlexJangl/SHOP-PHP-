<?php

session_start();

require_once '/../config/app.php';

//switch (isset($_GET['page'])? $_GET['page']: '/') {
//    case '/':
//        require_once '/../src/Controllers/ProductController.php';
//        $controller=new ProductController();
//        $controller->catalog();
//        break;
//    case 'contact':
//        require_once '/../src/Controllers/ContactController.php';
//        $controller=new ContactController();
//        $controller->contact();
//        break;
//    default:
//        exit('404 error');
//}

//var_dump($_SERVER['REQUEST_URI']);
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
require_once '/../src/Controllers/'.$controller.'.php';
$controller=new $controller();
$controller->$metod();