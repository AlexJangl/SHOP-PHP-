<?php
namespace App\Controllers;
use App\Controllers\Controller;
use App\Models\UsersModel;
//require_once '/../Models/UsersModel.php';


class UsersController extends Controller
{
    public function registration()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $this->smarty->display('registration.tpl');
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user = new UsersModel ();
            $user->createUsers(htmlspecialchars($_POST['name']), htmlspecialchars($_POST['email']), htmlspecialchars(md5(SECRET_KEY . $_POST['password'])));
            $_SESSION['name'] = $_POST['name'];
            $this->redirect('/');
        }

    }

    public function logout()
    {
        unset($_SESSION ['name']);
        $this->redirect('/');
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $this->smarty->display('login.tpl');
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user = new UsersModel();
            $status = $user->login($_POST['email'], $_POST['password']);

            switch ($status) {
                case 1:
                   $this->redirect('/');
                    break;
                case 2:
                    //$this->display('error', 'layout/main', ['error' => 'password error']);
                    $this->smarty->assign([
                        'error'=>'password error'
                    ]);
                    $this->smarty->display('error.tpl');

                    break;
                case 3:
                    //$this->display('error', 'layout/main', ['error' => 'email error']);
                    $this->smarty->assign([
                        'error'=>'email error'
                    ]);
                    $this->smarty->display('error.tpl');
                    break;
            }
        } else {
            $this->redirect('/');
        }
    }
}