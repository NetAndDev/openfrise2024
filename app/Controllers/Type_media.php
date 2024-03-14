<?php
namespace App\Controllers;

use App\Models\TypemediaModel;
use CodeIgniter\Exceptions\PageNotFoundException; // Add this line

class Type_media extends BaseController
{
    public function index()
    {
        return view("type_media/Type_media_link");
    }


    public function display($page = 'link')
    {
        if (! is_file(APPPATH . 'Views/type_media/Type_media_' . $page . '.php')) {
            throw new PageNotFoundException($page);
        }
        
        $MonModel = model('TypemediaModel');
      
        $data = [
            'chart' => $MonModel->getTypemedia(),
            'dell' => $MonModel->dell(array (
                'code_type_media',
                'label',
                'icon',
                'icon_ori',
                'comment',
                'date_create',
                'date_update',
                
            )),
        ];
          
        return view('type_media/Type_media_'.$page, $data);
    }
    public function insert() {
        
        $MonModel = model(TypemediaModel::class);
      
        $MonModel ->save([
                'code_type_media' => $_POST['code_type_media'],
                'label'  => $_POST['label'],
               //'icon'  => $_POST['icon'],
                'icon_ori'  => $_POST['icon_ori'],
                'comment'  => $_POST['comment'],
                //'date_create'  => $_POST['date_create'],
                //'date_update'  => $_POST['date_update']
                 ] );

                 return($this->display('add_success')); 
}


public function update($code_type_media){

    $MonModel = model(TypemediaModel::class);

    $MonModel->replace([
    'code_type_media' => $_POST['code_type_media'],
    'label'  => $_POST['label'],
    'icon'  => $_POST['icon'],
    'icon_ori'  => $_POST['icon_ori'],
    'comment'  => $_POST['comment'],

     
    ]);

    return($this->display('update_success'));
}


public function delete(){

    $MonModel = model(TypemediaModel::class);

  

        $sql = "DELETE FROM BDD_TYPE_MEDIA WHERE code_type_media = ?";

        $MonModel->query($sql, $_POST['code_type_media']);

    

    return($this->display('delete_success'));
}
}