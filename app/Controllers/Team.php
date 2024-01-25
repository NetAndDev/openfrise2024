<?php

namespace App\Controllers;

class TEAM extends BaseController
{
    public function index(): string
    {
        return view('team/team_menu');
    }
    public function liste(): string
    {
        return view('team/team_liste');
    }

    public function add (): string
    {
        return view('team/team_add');
    }

}