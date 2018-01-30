<?php
namespace App\Controllers;
use App\Controllers\Controller;
use App\Models\ProductModel;
use App\Models\UsersModel;
//require_once 'Controller.php';
//require_once '/../Models/ProductModel.php';


class ProductController  extends Controller
{
    public function index()
    {
        $products = new ProductModel();
        $products=$products->getAllProducts();
        $user = new UsersModel();
        $user=$user->is_admin($_SESSION['name']);
        $product=new ProductModel();
        if (isset($_SESSION['cart'])){
            $cart_count=0;
            foreach ($_SESSION['cart'] as $key=>$item){
                $cart_count=$cart_count+$item['count'];
            }}
        $this->smarty->assign([
            'user'=>$user,
            'products'=>$products,
            'cart_count'=>$cart_count

        ]);
        $this->smarty->display('catalog.tpl');
    }

    public function show()
    {
        $id=$_GET[id];
        $product=new ProductModel();
        $product=$product->getProduct($id);
        $this->smarty->assign([
            'product'=>$product
        ]);
        $this->smarty->display('product.tpl');
    }

    public function search(){
        $search=$_GET['search'];
        $products=new ProductModel();
        $products=$products->searchProducts($search);
        //$this->display('search_result', 'layout/main', ['products'=>$products, 'search'=>$search]);
        $this->smarty->assign([
            'products'=>$products
        ]);
        $this->smarty->display('search_result.tpl');
    }
}