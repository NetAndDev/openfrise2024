<?php

namespace App\Controllers;

class Gallerie extends BaseController
{
    public function menu()
    {
        return view('gallerie/gallerie_menu');
    }
}