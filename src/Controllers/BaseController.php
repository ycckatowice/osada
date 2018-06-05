<?php

namespace App\Controllers;

class BaseController
{
    protected $errors = [];
    public function __construct($app)
    {
        $this->app = $app;
    }

}