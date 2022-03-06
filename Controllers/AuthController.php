<?php

namespace App\Controllers;

use App\core\Request;
use App\Models\RegisterModel;

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
            $registerModel = new RegisterModel();
            $registerModel->loadData($request->getBody());

            if ($registerModel->validate() && $registerModel->register()) {
                return 'Registration Success';
            }
            return $this->render('register', [
                'model' => $registerModel
            ]);
        }
        $this->setLayout('auth');
        return $this->render('register');
    }
}