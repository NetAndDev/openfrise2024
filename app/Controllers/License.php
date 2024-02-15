<?php


namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class License extends BaseController
{
    public function menu()
    {
        return view('license/license_menu');
    }

    public function display($page = 'menu')
    {
        if (! is_file(APPPATH . 'Views/license/license_' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }
        
        $model = model('LicenseModel');
        
        $data = array(
            'license' => $model->getLicense()
        );

    return view('license/license_'.$page,$data);

    }
}
        
