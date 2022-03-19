<?php

App::get('database')->insert('users',['name'=> $_REQUEST['name']]);
header('Location:/');