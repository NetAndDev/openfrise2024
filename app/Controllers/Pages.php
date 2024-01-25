<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function galleries()
    {
        return view('galleries');
    }

    public function view($page = 'home')
    {
        // ...
    }
}