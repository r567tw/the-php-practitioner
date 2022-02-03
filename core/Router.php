<?php

class Router 
{

    protected $routes;

    public static function load($file){
        $router = new self;
        require $file;
        return $router;
    }

    public function define($routes){
        $this->routes = $routes;
    }

    public function direct($uri){
        // $url = $_SERVER['REQUEST_URI'];
        $routes = $this->routes;
        if (array_key_exists($uri, $routes)){
            return $routes[$uri];
        } else {
            throw new \Exception("404 not found");
        } 
    }
}