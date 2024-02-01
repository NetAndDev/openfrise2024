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

    public function find($id_user = false)
    {
        $model = model(RightModel::class);

        $data['user'] = $model->getUser($id_user);

        $page = 'detail';

        if (! is_file(APPATH . 'Views/right/right_' . $page . '.php')) {
            throw new PageNotFoundException($page);

        }

        $data['title'] = ucfirst($page);
        $data['numero'] = 123;

        return view('right/right_' . $page, $data);
    }

}