<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

use App\Models\HyphenModel;

class Hyphen extends BaseController
{
    public function display($page= 'menu') :string
    {
        

        if (! is_file(APPPATH . 'Views/hyphen/hyphen_' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page);

        return view('hyphen/hyphen_' . $page, $data);
    }


    public function find($id_hyphen = false)
    {
        $model = model(HyphenModel::class);

        $data['hyphen'] = $model->getHyphen($id_hyphen);

        $page = 'detail';

        if (! is_file(APPPATH . 'Views/hyphen/hyphen_' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }
        return view('hyphen/hyphen_' . $page, $data);
     
     }
}