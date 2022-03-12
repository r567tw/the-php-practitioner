<?php

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
            return $routes[$uri];
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
}