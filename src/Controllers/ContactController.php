<?php
namespace App\Controllers;
use App\Controllers\Controller;

class ContactController  extends Controller
{
    public function index()
    {
        $this->smarty->display('contact.tpl');
    }
}

