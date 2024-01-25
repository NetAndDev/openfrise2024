<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function menu()
    {
        return view('galleries/galleries');
    }
}