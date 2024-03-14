<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

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

        if($page == 'detail' || $page == 'upd' || $page == 'del'){
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

        // Appelle la fonction display pour afficher la page media_add_success
        return($this->display('add_success'));
    }

    public function update(){

        $model = model('App\Models\MediaModel');

        $model->replace(['id_media' => $_POST['id_media'],
            'label' => $_POST['label'],
            'sublabel' => $_POST['sublabel'],
            'legend' => $_POST['legend'],
            'source' => $_POST['source'],
            'filename_ori' => $_POST['filename_ori'],
            'code_license' => $_POST['code_license'],
            'code_type_media'=>  $_POST['code_type_media'],
            'comment' => $_POST['comment']
        ]);

        // Appelle la fonction display pour afficher la page media_update_success
        return($this->display('upd_success'));
    }

    public function delete(){

        $model = model('App\Models\MediaModel');

        $sql = "DELETE FROM BDD_MEDIAS WHERE id_media = ?";

        $model->query($sql, $_POST['id_media']);

        // Appelle la fonction display pour afficher la page media_update_success
        return($this->display('del_success'));
    }
}