<?php
namespace App\Controllers;
use App\Core\App;

class PageController{

    public function index()
    {
        $users = App::get('database')->selectAll("users");
        return view("index.view",['users'=> $users]);
    }

    public function contact()
    {
        return view("contact");

    }

    public function addName()
    {
        App::get('database')->insert('users',['name'=> $_REQUEST['name']]);
        header('Location:/');
    }

    public function helloWorld()
    {
        echo 'this request is from post';
        echo '<br/>';
        var_dump($_POST);
    }

    public function about()
    {
        return view("about");
    }

    public function aboutTest()
    {
        return view("about-test");
    }
}