<?php

namespace App\Controllers;

class type_media extends BaseController
{
    public function index(): string
    {
        return view('Type-media/lienTypeMedia');
    }
    public function add(): string
    {
        return view('Type-media/addTypeMedia');
    }
    public function liste(): string
    {
        return view('Type-media/listeTypeMedia');
    }
}
