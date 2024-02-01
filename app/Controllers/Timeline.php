<?php

namespace App\Controllers;

class Timeline extends BaseController
/*{
    public function index(): string
    {
        return view('timeline/timeline_menu');
    }
    public function list(): string
    {
        return view('timeline/timeline_list');
    }
    public function add(): string
    {
        return view('timeline/timeline_add');
    }
}*/
 {   
   public function index(): string
    {
        return view('timeline/timeline_menu');
    }
    
    public function display($page = 'menu')
     { 

        if (! is_file(APPPATH . 'Views/timeline/timeline_' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page);  // Capitalize the first letter
        $data[''] = 'Tahia Djazair';

        return view('timeline/timeline_' . $page, $data); // $data: ['numero' => 123] 
     }

    public function find($id_timeline = false)
     {
        $model = model(TimelineModel::class);

        $data['timeline'] = $model->getTimeline($id_timeline);

        $page = 'detail';

        if (! is_file(APPPATH . 'Views/timeline/timeline_' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }
        return view('timeline/timeline_' . $page, $data); 
     
     }
 }    
    
    