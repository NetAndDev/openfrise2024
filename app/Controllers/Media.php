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
        
        return view('/media/media_'.$page); //$data: ['numero' => 123]
    }

    public function find($id_ser = false){
        $model = model(MediaModel::class);
        $data['media'] = $model->getMedia($id_media);

        return view('media/media_'.$page, $data);
    }
}