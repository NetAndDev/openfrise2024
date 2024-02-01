<?php

namespace App\Controllers;

class Timeline extends BaseController
{
    public function index(): string
    {
        return view('timeline/timeline_menu');
    }
    public function list(): string
    {
        return view('timeline/timeline_list');
    }
    public function add(): string
    {
        return view('timeline/timeline_add');
    }
}
