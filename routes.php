<?php

// $router->define([
//     ''      => 'controllers/index.php',
//     'contact'   => 'controllers/contact.php',
//     'about' => 'controllers/about.php',
//     'about/test' => 'controllers/about-test.php',
//     'name'      => 'controllers/add_name.php'
// ]);


$router->get('', 'controllers/index.php');
$router->get('contact', 'controllers/contact.php');
$router->get('about', 'controllers/about.php');
$router->get('about/test', 'controllers/about-test.php');
$router->get('name', 'controllers/add_name.php');
$router->post('helloworld', 'controllers/add_helloworld.php');