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
 'code_license' => $_POST['code_license'], 
'title' => $_POST['title'],
 'filename' => $_POST['filename'],
 'filename_ori' => $_POST['filename_ori'],
 'icon' => $_POST['icon'],
 'icon_ori' => $_POST['icon_ori'],
 'comment' => $_POST['comment'],
 ]);

 return($this->display('add_success'));
 }
 public function update(){

    $model = model('App\Models\LicenseModel');

    $model->replace(['code_license' => $_POST['code_license'],
        'title' => $_POST['title'],
        'filename' => $_POST['filename'],
        'filename_ori' => $_POST['filename_ori'],
        'icon' => $_POST['icon'],
        'icon_ori' => $_POST['icon_ori'],
        'comment' => $_POST['comment'],
               
    ]);

    // Appelle la fonction display pour afficher la page license_update_success
    return($this->display('update_success'));
}
public function delete(){

    $model = model('App\Models\LicenseModel');

    $sql = "DELETE FROM BDD_LICENSES WHERE code_license = ?";

    $model->query($sql, $_POST['code_license']);

    // on utilise ensuite la ligne qui permet d'afficher la page license_delete_success
    return($this->display('delete_success'));
}

}
