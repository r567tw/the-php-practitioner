<?php

require "bootstrap.php";
require "Task.php";

$tasks = $query->selectAll("tasks-not-exist",'Task');

require "index.view.php";

