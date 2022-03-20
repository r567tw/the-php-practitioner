<?php

$router->get('', 'PageController@index');
$router->get('a', 'PageController@a'); // not found

$router->get('contact', 'PageController@contact');
$router->get('about', 'PageController@about');
$router->get('about/test', 'PageController@aboutTest');
$router->get('name', 'PageController@addName');
$router->post('helloworld', 'PageController@helloWorld');