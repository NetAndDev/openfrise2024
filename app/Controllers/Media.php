<?php

namespace App\Controllers;

class Media extends BaseController
{
    public function menu()
    {
        return view('media/media_menu');
    }

    public function add()
    {
        return view('media/media_add');
    }

    public function list()
    {
        return view('media/media_list');
    }
}
