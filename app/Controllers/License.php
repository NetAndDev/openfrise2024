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
        
        $model = model('App\Models\LicenseModel');        
        $data['license'] = $model->getLicense();

if($page == 'detail'){
    $detail = $this->request->getGet();
    $data['detail'] = $model->getLicense($detail);
}


    return view('license/license_'.$page,$data);

    }


public function insert()
{
 $model = model('App\Models\LicenseModel');

 $model->save([
 'title' => $_POST['title'],
 'filename' => $_POST['filename'],
 'filename_ori' => $_POST['filename_ori'],
 'icon' => $_POST['icon'],
 'icon_ori' => $_POST['icon_ori'],
 // pour la mise en point, le mot de passe est mis en commentaire
 'comment' => $_POST['comment'],
 ]);

 return($this->display('add_success'));
 }
}
