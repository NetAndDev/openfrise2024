<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException; // Add this line

class Level extends BaseController
{
    public function index()
    {
        return view('templates/header', $data)
            . view('level/' . $page)
            . view('templates/footer');
    }

    public function view($page = 'menu')
    {
        if (! is_file(APPPATH . 'Views/level/level_' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        return view('templates/header', $data)
            . view('level/level_' . $page)
            . view('templates/footer');
    }

    

}