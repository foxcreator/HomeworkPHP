<?php

namespace App\Http\Controllers\Admin;

class DashboardController
{
    public function __construct()
    {
        var_dump(get_class($this));
    }
}