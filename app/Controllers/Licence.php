<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException; // Add this line

class Licence extends BaseController
{
    // ...

    public function menu()
    {
    return view('licence/license_menu');
    }
    
    public function add()
    {
    return view('licence/license_add');
    }
    public function liste()
    {
    return view('licence/licence_list');
    }
}