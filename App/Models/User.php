<?php

namespace App\Models;

class User
{
    public function __construct()
    {
        var_dump(get_class($this));
    }

}