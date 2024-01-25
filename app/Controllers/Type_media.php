<?php

namespace App\Controllers;

class type_media extends BaseController
{
    public function index(): string
    {
        return view('Type-media/addTypeMedia');
    }
}
