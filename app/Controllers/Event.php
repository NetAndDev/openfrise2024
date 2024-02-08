<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class Event extends BaseController
{
    public function display($page="menu") 
    {
        if (! is_file(APPPATH . 'Views/event/event_' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        $model_mael = model('EventModel');

        $data = [
            'mael' => 123,
            'test' => $model_mael->getEvent(24),
            'f' => $model_mael->m(),
            'F' => $model_mael->m(array (
                'label',
                'sublabel',
                'is_ponctual',
                'date_begin',
                'date_end',
                'comment' 
                )
            ),
            'ff' => $model_mael->p(),
            'foofighters' => $model_mael->l(array (
                'label',
                'sublabel',
                'is_ponctual',
                'date_begin',
                'date_end',
                'comment' 
                )
            )
        ];
        
        
        return view('event/event_'.$page, $data);
    }
}