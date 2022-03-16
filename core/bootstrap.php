<?php 
require "core/Router.php";
require "core/Request.php";
require "core/database/Connection.php";
require "core/database/QueryBuilder.php";

$config = require "config.php";
$app = array();
$app['database'] = new QueryBuilder(Connection::make($config));