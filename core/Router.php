<?php
namespace App\core;

class Router{
    protected array $routes = [];
    public Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;
        if($callback === false){
        return $this->RenderView('home');
        }

        return $this->RenderView($callback);

        return call_user_func($callback);
    }

    public function RenderView($view)
    {
        $layoutContent = $this->layoutContent();
        $viewContent = $this->RenderOnlyView($view);
        return str_replace('{{content}}', $viewContent, $layoutContent);
    }

    public function layoutContent()
    {
        ob_start();
        include_once Application::$ROOT_DIR."/Views/layouts/main.php";
        return ob_get_clean() ;
    }

     public function RenderOnlyView($view)
    {
        ob_start();
        include_once Application::$ROOT_DIR."/Views/$view.php";
        return ob_get_clean() ;

    }

}