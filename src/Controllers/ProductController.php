<?php
namespace App\Controllers;
use App\Controllers\Controller;
use App\Models\ProductModel;
//require_once 'Controller.php';
//require_once '/../Models/ProductModel.php';


class ProductController  extends Controller
{
    public function index()
    {
        $products = new ProductModel();
        $this->display('catalog', 'layout/main', ['products' => $products->getAllProducts()]);
    }

    public function show()
    {
        //echo 'Hello';
        $id=$_GET[id];
        $product=new ProductModel();
        $this->display('product','layout/main',$product->getProduct($id));
    }
    public function search(){
        $search=$_GET['search'];
        $products=new ProductModel();
        $products=$products->searchProducts($search);
        $this->display('search_result', 'layout/main', ['products'=>$products, 'search'=>$search]);
    }
}