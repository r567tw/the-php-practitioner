<?php 

class Connection {


    public static function make()
    {
        try {
            return new PDO('mysql:host=127.0.0.1:3308;dbname=mytodo','root','password');
        } catch (\Throwable $th) {
           die($th->getMessage());
        }
    }
}