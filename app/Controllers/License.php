<?php


namespace App\Controllers;

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
        
        $model = model('app/Models/LicenseModel');
        $data['license'] = $model->getLicense();

        return view('license/license_'.$page,$data);

    }
}
        
