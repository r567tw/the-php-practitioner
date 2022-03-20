<?php 
namespace App\Core;

class App{
    protected static $registry = [];
    
    public function run(){

    }

    public static function bind($key , $value){
        static::$registry[$key] = $value;
    }

    public static function get($key) {
        if (!array_key_exists($key, static::$registry)){
            throw new \Exception("Ops, there're a error");
        }
        return static::$registry[$key];
    }

}