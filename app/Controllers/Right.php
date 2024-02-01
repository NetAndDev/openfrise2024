<?php

namespace App\Controllers;

class Right extends BaseController
{
    public function index(): string
    {
        return view('right/right_index');
    }

    public function add()
    {
        return view('right/right_add');
    }

    public function list()
    {
        return view('right/right_list');
    }

    public function menu()
    {
        return view('right/right_menu');
    }

    public function display($page = 'menu')
    {
        if (! is_file(APPATH . 'Views/user/user_' . $page . '.php')) {
            throw new PageNotFoundException($page);

        }

        $data['title'] = ucfirst($page);
        $data['numero'] = 123;

        return view('user/user_');
    }

}