<?php

namespace App\Controllers;
use Smarty;

class Controller
{
    protected $smarty;

    public function __construct()
    {
        $this->smarty=new Smarty();
        $this->smarty->setTemplateDir(APP.'/Views/SmartyTemplates');
        $this->smarty->setCompileDir(APP.'/Views/SmartyTemplatesCache');
        $this->smarty->setCacheDir(APP.'/Views/SmartyCache');
        $this->smarty->setConfigDir(APP.'/Views/SmartyConfigs');
        $this->smarty->caching =SMARTY_CACHE;

        $this->smarty->assign([
            'cart_count' => count($_SESSION['cart'])
        ]);


    }

    public function redirect ($url)
    {
        header('Location:'.$url );
    }

//    public function display($name, $layout = 'layout/main', $data=null){
//        $data['cart_count']=0;
//        if (isset($_SESSION['cart'])){
//            foreach ($_SESSION['cart'] as $item){
//                $data['cart_count']+=$item['count'];
//            }
//        }
//
//        require_once '/../Views/'.$layout.'.php';
//    }
}