<?php 

// $app = array();
// $app['config'] = require "config.php";
// $app['database'] = new QueryBuilder(
//     Connection::make($app['config']['database'])
// );

App::bind('config', require "config.php");
App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));