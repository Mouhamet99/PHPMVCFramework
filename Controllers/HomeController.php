<?php

namespace App\Controllers;

use App\core\Application;

class HomeController extends Controller
{
    public function home()
    {
        $params = [
            'name' => 'HomePage'
        ];

        return $this->render('home', $params);
    }

    public function contact()
    {
        return $this->render('contact');
    }

    public function handleContact(): string
    {
        return "Handle submitting data";
    }

}