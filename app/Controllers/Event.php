<?php

namespace App\Controllers;

class EVENT extends BaseController
{
    public function index(): string
    {
        return view('event/event_menu');
    }
    public function list(): string
    {
        return view('event/event_list');
    }
    public function add (): string
    {
        return view('event/event_add');
    }
}