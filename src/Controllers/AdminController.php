<?php
namespace App\Controllers;
use App\Controllers\Controller;
use App\Models\UsersModel;
use App\Models\ProductModel;
//require_once '/../Models/UsersModel.php';
//require_once '/../Models/ProductModel.php';

class AdminController extends Controller
{
    function __construct()
    {
        parent::__construct();
        $users= new UsersModel();
        if (!$users->is_admin($_SESSION['name'])){
            $this->redirect('/');
        }

    }
    public function products(){
        $products=new ProductModel();
        $products=$products->getAllProducts();
        //var_dump($this->smarty);
        $this->smarty->assign([
            'products' => $products
        ]);
       $this->smarty->display('Admin/products.tpl');
    }
    public function edit_product(){
        $id=$_GET['id'];
        $product=new ProductModel();
        $product=$product->getProduct($id);
        $this->smarty->assign([
            'product'=>$product
        ]);
        $this->smarty->display('Admin/edit_product.tpl');
    }

    public function update_product (){
        $product=new ProductModel();
        $id=$_POST['id'];
        $img_del=$product->getProduct($id)['img'];

        if (is_uploaded_file($_FILES['img']['tmp_name']) && $_FILES['img']['size']<1024*1024*2) {
            if ($img_del != null) {
                $img_del = 'img/' . $img_del;
                unlink($img_del);
            }
            $type='.'.explode('.',$_FILES['img']['name'])[1];
            $img_name=md5($_FILES['img']['name'].$_POST['name']).$type;
            move_uploaded_file($_FILES['img']['tmp_name'],'img/'.$img_name);
        }
        else{
            $img_name=null;
        }
        $product->updateProduct($_POST['id'], $_POST['name'], $_POST['description'], $_POST['price'], $img_name);
        $this->redirect('/admin/products');

    }

    public function delete_product(){
    $id=$_GET['id'];
    $product=new ProductModel();
    $img_name='img/'.$product->getProduct($id)['img'];
    unlink($img_name);
    $product=$product->deleteProduct($id);
    $this->redirect('/admin/products');
    }

    public function create_product(){
        $this->smarty->display('Admin/create_product.tpl');
    }

    public function save_product(){
        $product=new ProductModel();
        $type='.'.explode('.',$_FILES['img']['name'])[1];
        $img_name=md5($_FILES['img']['name'].$_POST['name']).$type;
        if (is_uploaded_file($_FILES['img']['tmp_name']) && $_FILES['img']['size']<1024*1024*2){
            $type='.'.explode('.',$_FILES['img']['name'])[1];
            $img_name=md5($_FILES['img']['name'].$_POST['name']).$type;
            move_uploaded_file($_FILES['img']['tmp_name'],'img/'.$img_name);
        }
        else{
            $img_name=null;
        }
        $product->saveProduct($_POST['name'], $_POST['description'], $_POST['price'], $img_name);
        $this->redirect('/admin/products');
    }
    public function users(){
        $users=new UsersModel();
        $users=$users->getAllUsers();
        //var_dump($products);
        $this->smarty->assign([
            'users' => $users
        ]);
        $this->smarty->display('Admin/users.tpl');
        //$this->display('users', 'Admin/layout/main',$users);
    }
    public function create_user(){
        $this->smarty->display('Admin/create_user.tpl');
    }
    public function save_user()
    {
        $user = new UsersModel();
        $user->saveUser($_POST['name'], $_POST['email'], md5(SECRET_KEY.$_POST ['password']));
        $this->redirect('/admin/users');
    }
    public function delete_user(){
        $id=$_GET['id'];
        $user=new UsersModel();
        $user=$user->deleteUser($id);
        $this->redirect('/admin/users');
    }
    public function edit_user(){
        $id=$_GET['id'];
        $user=new UsersModel();
        $user=$user->getUser($id);
        $this->smarty->assign([
           'user'=>$user
        ]);
        $this->smarty->display('Admin/edit_user.tpl');
    }

    public function update_user (){
        $user=new UsersModel();
        $password=$user->test_password($_POST['email'],$_POST['password']);
          $user->updateUser($_POST['id'], $_POST['name'], $_POST['email'], $password, $_POST['role']);
          $this->redirect('/admin/users');
    }
}