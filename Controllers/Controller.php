<?php

namespace App\Controllers;

use App\core\Application;

class Controller
{
    public function render($view, $params = [])
    {
        return Application::$app->router->RenderView($view, $params);
    }
}