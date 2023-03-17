<?php

namespace App\services;



class Admin
{
    public function isAdmin()
    {
        return auth()->user() && auth()->user()->role ?? auth()->user()->role->admin;
    }
}
