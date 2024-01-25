<?php

namespace App\Controllers;

class Type_media extends BaseController
{
    public function index(): string
    {
        return view('Type-media/addTypeMedia');
    }
}
