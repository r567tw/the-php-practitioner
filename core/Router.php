<?php
namespace App\Core;

class Router 
{

    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file){
        $router = new self;
        require $file;
        return $router;
    }

    public function define($routes){
        $this->routes = $routes;
    }

    public function direct($uri,$request_method){
        $routes = $this->routes[$request_method];
        if (array_key_exists($uri, $routes)){
            return $this->callAction(
                ...explode("@",$routes[$uri])
            );
        } else {
            throw new \Exception("404 not found");
        } 
    }

    public function get($name,$route){
        $this->routes['GET'][$name] = $route;
    }

    public function post($name,$route){
        $this->routes['POST'][$name] = $route;
    }

    public function callAction($controller ,$action)
    {
        $class = "App\\Controllers\\{$controller}";
        $object =  new $class;
        if (!method_exists($object,$action)){
            throw new \Exception("{$controller} doesn't have {$action} method");
        }
        return $object->$action();
    }
}