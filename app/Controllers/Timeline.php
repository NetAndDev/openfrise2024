<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

use App\Models\TimelineModel;

class Timeline extends BaseController

 {   
    public function display($page = 'menu')
     { 

        if (! is_file(APPPATH . 'Views/timeline/timeline_' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }
     
        $model_time = model('TimelineModel');
        $array_test = array (
            'label',
            'sublabel',
            'date_begin',
            'date_end',
            'comment' 
        );
        $data = [
            'fields' => $model_time->getFieldsNames($array_test),
            'value' => $model_time->getValue($array_test),
        ];
        
        
        return view('timeline/timeline_'.$page, $data);
    }
}
    

