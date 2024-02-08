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
            //Whoops, we don't have a page for that !
            throw new PageNotFoundException($page);
        }

        $model_lucas = model('GalleryModel');
        $array_test = array(
            'label',
            'sublabel',
            'comment',
        );
        $data = [
            'fields' => $model_lucas->getFieldsNames($array_test),
            'value' => $model_lucas->getValue($array_test)
        ];

        return view('gallery/gallery_'.$page,$data);

    }

}