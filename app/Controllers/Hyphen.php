<?php

namespace App\Controllers;

class Hyphen extends BaseController
{
    public function index(): string
    {
        return view('hyphen/hyphen_menu');
    }

    public function add (): string
    {
        return view('hyphen/hyphen_add');
    }
    public function liste (): string
    {
        return view('hyphen/hyphen_list');
    }
}