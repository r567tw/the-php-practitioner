<?php

$app['database']->insert('users',['name'=> $_REQUEST['name']]);
header('Location:/');