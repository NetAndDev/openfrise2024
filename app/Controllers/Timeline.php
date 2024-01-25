<?php

namespace App\Controllers;

class Timeline extends BaseController
{
    public function index(): string
    {
        return view('timeline/timeline_menu');
    }
    public function add(): string
    {
        return view('timeline/timeline_add');
    }
    public function liste(): string
    {
        return view('timeline/timeline_liste');
    }
}
