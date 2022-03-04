<?php

namespace App\Controllers;

use App\core\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isPost()) {
            return 'Login data';
        }
        $this->setLayout('auth');
        return $this->render('login');
    }

    public function register(Request $request)
    {
        if ($request->isPost()) {
            return 'Registration Success';
        }
        $this->setLayout('auth');
        return $this->render('register');
    }
}