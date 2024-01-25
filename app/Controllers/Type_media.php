<?php

namespace App\Controllers;

class Type_media extends BaseController
{
    public function index(): string
    {
        return view('type_media/lienTypeMedia');
    }
    public function add(): string
    {
        return view('type_media/addTypeMedia');
    }
    public function liste(): string
    {
        return view('type_media/listeTypeMedia');
    }
}
