<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException; // Add this line

class Licence extends BaseController
{
    // ...

    public function index(): string
    {
    return view('licence/menulicence');
    }
    
    public function add (): string
    {
    return view('licence/addlicence');
    }
    public function liste (): string
    {
    return view('licence/listelicence');
    }
}