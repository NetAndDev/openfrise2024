<?php

namespace App\Controllers;

class TEAM extends BaseController
{
    public function index(): string
    {
        return view('Team');
    }
    public function index(): string
    {
        return view('team/team_menu');
    }

    public function add (): string
    {
        return view('team/team_liste');
    }
}