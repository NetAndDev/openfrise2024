<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

use App\Models\TimelineModel;

class Timeline extends BaseController

{
    public function index($page = 'menu')
    {
        if (!is_file(APPPATH . 'Views/timeline/timeline_' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        return view('timeline/timeline_' . $page);
    }


   
    public function display($page = 'menu')
     { 

        if (! is_file(APPPATH . 'Views/timeline/timeline_' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }
        
        $model = model('App\Models\TimelineModel');
        $data['timeline'] = $model->getTimeline();

        return view('/timeline/timeline_'.$page, $data); //$data: ['numero' => 123]
    }

        
        /*$model_time = model('TimelineModel');
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
}*/
   

    public function insert()
{
     $model = model(TimelineModel::class);

    $model->save([
         'label' => $_POST['label'],
         'sublabel' => $_POST['sublabel'],
         'date_begin' => $_POST['date_begin'],
         'date_end' => $_POST['date_end'], 
         'is_public' => $_POST['is_public'],
         'comment' => $_POST['comment'],
 
 ]);

      return($this->display('add_success'));
 }
}