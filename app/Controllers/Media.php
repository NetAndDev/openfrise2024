<?php

namespace App\Controllers;

class Media extends BaseController
{
    public function menu()
    {
        return view('media/media_menu');
    }

    public function display($page = 'menu')
    {
        if (! is_file(APPPATH . 'Views/media/media_' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }
        
        $model = model('App\Models\MediaModel');
        $data['media'] = $model->getMedia();

        if($page == 'detail'){
            $detail = $this->request->getGet();
            $data['detail'] = $model->getMedia($detail); 
        }
        return view('/media/media_'.$page, $data);
    }

    public function insert(){

        $model = model('App\Models\MediaModel');

        $model->save([

            'label' => $_POST['label'],
            'sublabel' => $_POST['sublabel'],
            'legend' => $_POST['legend'],
            'source' => $_POST['source'],
            'filename_ori' => $_POST['filename_ori'],
            'code_license' => $_POST['code_license'],
            'code_type_media'=>  $_POST['code_type_media'],
            'comment' => $_POST['comment']

        ]);

        return($this->display('add_success'));
    }
}