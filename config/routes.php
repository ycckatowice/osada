<?php
require __DIR__."/../vendor/autoload.php";
$app->get('/api/user', 'App\Controllers\UserController:getAll');
