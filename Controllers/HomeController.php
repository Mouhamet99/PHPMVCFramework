<?php

namespace App\Controllers;

use App\core\Application;
use App\core\Request;

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

    public function handleContact(Request $request): string
    {
        $body = $request->getBody();
        var_dump($body);
        return "Handle submitting data";
    }

}