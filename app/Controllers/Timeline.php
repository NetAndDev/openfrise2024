<?php

namespace App\Controllers;

class Timeline extends BaseController
{
    public function index(): string
    {
        return view('timeline_menu');
    }
}