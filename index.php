<?php

require "core/bootstrap.php";
require "Task.php";

// require "routes.php";

require Router::load("routes.php")->direct(
    Request::uri(),
    Request::method()
);

