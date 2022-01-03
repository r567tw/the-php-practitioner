<?php

require "bootstrap.php";
require "Task.php";

$tasks = $query->selectAll("tasks",'Task');

require "index.view.php";

