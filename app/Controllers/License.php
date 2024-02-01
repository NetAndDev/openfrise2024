<?php
/*
namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException; // Add this line

class License extends BaseController
{
    // ...

   /*
    public function menu()
    {
    return view('license/license_menu');
    }
    
    public function add()
    {
    return view('license/[license_add');
    }
    public function list()
    {
    return view('license/license_list');
    }
*/
/* public function find($id_user = false)
{$license = license(licensemodel::class);
$data['license'] = model->getuser($id_license);
$page = "detail";


if(! is_file(APPPATH . 'Views/license/' . $page . '.php')); {
    // Whoops, we don't have a page for that!
    throw new PageNotFoundException($page);
}

$data['title'] = ucfirst($page);
$data['numero']= 123;


return view('license/license' . $page,$data);
}
public function display($page = 'menu')
    {
        if (! is_file(APPPATH . 'Views/media/media_' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }
    {
    return view('license/license_menu');
    }
} */

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
            $data['license'] = $model->getLicense($id_user);
    
            return view('license/license_'.$page, $data);
        }
    }        return view('license/license_'.$page, $data);
    
