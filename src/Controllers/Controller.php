<?php
/**
 * Created by PhpStorm.
 * User: Shurik.com
 * Date: 13.12.2017
 * Time: 21:33
 */

class Controller
{
    public function redirect ($url)
    {
        header('Location:'.$url );
    }

    public function display($name, $layout = 'layout/main', $data=null){
        $data['cart_count']=0;
        if (isset($_SESSION['cart'])){
            foreach ($_SESSION['cart'] as $item){
                $data['cart_count']+=$item['count'];
            }
        }

        require_once '/../Views/'.$layout.'.php';
    }
}