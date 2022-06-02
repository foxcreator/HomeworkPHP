<?php

namespace App\Models;

class Product
{
    public function __construct()
    {
        var_dump(get_class($this));
    }
}