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

        return view('/media/media_'.$page, $data);
    }
}