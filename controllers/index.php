<?php
// var_dump($query);
$tasks = $query->selectAll("tasks",'task');

require "views/index.view.php";

