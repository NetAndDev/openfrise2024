<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException; //Add this line

class Gallery extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function display($page = 'menu')
    {
        //...

        if(! is_file(APPPATH.'Views/gallery/gallery_'.$page.'.php')){
            
            throw new PageNotFoundException($page);
        }

        $model_lucas = model('GalleryModel');
        $array_test = array(
            'id_gallery',
            'label',
            'sublabel',
            'comment',
        );
        $data = [
            'fields' => $model_lucas->getFieldsNames($array_test),
            'value' => $model_lucas->getValue($array_test)
        ];

        $get=$this->request->getGet();
        if($page == 'detail'){
            if (!empty($this->request->getGet()['id_gallery'])){
                $data = [
                    'fields' => $model_lucas->getFieldsNames(),
                    'value'  => $model_lucas->getGallery($get['id_gallery']),
                ];
            }
        }

        return view('gallery/gallery_'.$page,$data);

    }
     
    public function insert()
    {
    $model = model('App\Models\GalleryModel');
    
    $model->save([
    'label' => $_POST['label'],
    'sublabel' => $_POST['sublabel'],
    'comment' => $_POST['comment'],
    ]);

    return($this->display('add_success'));
    }
}