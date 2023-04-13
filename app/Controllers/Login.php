<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Login extends BaseController
{   
    protected $request;

    public function __construct(){

        $this->request = \Config\Services::request();
    }

    public function index()
    {
        return view("auth/login");
    }


    public function verify(){
        
        $email = $this->request->getPost('email');
        $pass = $this->request->getPost('password');
      
        
        
    }
   
}

