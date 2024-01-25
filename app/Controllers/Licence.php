<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException; // Add this line

class Licence extends BaseController
{
    // ...

    public function menu()
    {
    return view('licence/menulicence');
    }
    
    public function add()
    {
    return view('licence/addlicence');
    }
    public function liste()
    {
    return view('licence/listelicence');
    }
}