<?php

namespace App\Controllers;

class TEAM extends BaseController
{
    public function index(): string
    {
        return view('Team');
    }
}