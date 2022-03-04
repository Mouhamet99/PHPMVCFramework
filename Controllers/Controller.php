<?php

namespace App\Controllers;

use App\core\Application;

class Controller
{
    public string $layout = 'main';

    public function render($view, $params = [])
    {
        return Application::$app->router->RenderView($view, $params);
    }

    public function setLayout($layout){
        $this->layout = $layout;
    }
}