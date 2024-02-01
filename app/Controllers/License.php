<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException; // Add this line

class License extends BaseController
{
    // ...

    public function menu()
    {
    return view('license/license_menu');
    }
    
    public function add()
    {
    return view('license/license_add');
    }
    public function list()
    {
    return view('license/license_list');
    }
}