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
        $array_test = array (
            'label',
            'sublabel',
            'is_ponctual',
            'date_begin',
            'date_end',
            'comment' 
        );
        $data = [
            'fields' => $model_mael->getFieldsNames($array_test),
            'value' => $model_mael->getValue($array_test)
        ];
        
        
        return view('event/event_'.$page, $data);
    }
}