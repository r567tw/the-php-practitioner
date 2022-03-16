<?php
// var_dump($query);
$users = $app['database']->selectAll("users");

require "views/index.view.php";

