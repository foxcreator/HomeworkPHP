<?php

namespace Models;

class Order
{
    public function __construct()
    {
        var_dump(get_class($this));
    }
}