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
        
        return view('/license/license_'.$page); //$data: ['numero' => 123]
    }

  

    
   
    
        public function find($id_ser = false){
            $model = model(LicenseModel::class);
            $data['license'] = $model->getLicense($id_license);
    
            return view('license/license_'.$page, $data);
        }
    }    
