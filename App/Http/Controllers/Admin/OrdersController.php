<?php

namespace App\Http\Controllers\Admin;


class OrdersController
{
    public function __construct()
    {
        var_dump(get_class($this));
    }
}