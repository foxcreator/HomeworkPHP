<?php

namespace App\Http\Controllers;


class MainController
{
    public function __construct()
    {
        var_dump(get_class($this));
    }
}