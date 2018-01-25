<?php
namespace App\Controllers;
use App\Controllers\Controller;
use App\Models\ProductModel;
//require_once "/../Models/ProductModel.php";

class CartController extends Controller
{
    public function add(){
        //unset($_SESSION['cart']);
       //$cart=$_SESSION['cart'];
        $id=$_GET['id'];
       if (isset($_SESSION['cart'])){
           foreach ($_SESSION['cart'] as $key=>$item){
               if ($item['id']==$id){
                   $_SESSION['cart'][$key]['count']++;
                   $this->redirect('/');
                   exit();
               }
           }
           $_SESSION['cart'][]=['id'=>$_GET['id'],'count'=>1];
           $this->redirect('/');
       }
       else{
           $_SESSION['cart'][]=['id'=>$_GET['id'],'count'=>1];
           $this->redirect('/');
       }
       //$this->redirect('/cart/show');
    }
    public function show (){
        $products=[];
        $sum=0;
        $product=new ProductModel();
        if (isset($_SESSION['cart'])){
         foreach ($_SESSION['cart'] as $key=>$item){
             $products[$key]=$product->getProduct($item['id']);
             $products[$key]['count']=$item['count'];
             $products[$key]['key'] = $key;
             $sum=$sum+$products[$key]['price']*$products[$key]['count'];
             
         }
//         var_dump($products);
            $this->display('cart','layout/main',['products'=>$products, 'sum'=>$sum]);
        }
         else{
            $this->display('error','layout/main',['error'=>'Карзина пустая']);
         }
        //$this->display('cart');
    }
    public function deleteCart(){
        unset($_SESSION['cart']);
        $this->redirect('/cart/show');
    }
    public function delProductCart(){
        $id=$_GET['id'];
        unset($_SESSION['cart'][$id]);
        if (empty($_SESSION['cart'])){
            $this->deleteCart();
        }
        else{
            $this->redirect('/cart/show');
        }


}
 }