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

        if($page == 'detail'|| $page == 'update'|| $page == 'dele'){
            $detail = $this->request->getGet();
            $data['detail'] = $model->gettimeline($detail); 
        }

        return view('/timeline/timeline_'.$page, $data); //$data: ['numero' => 123]
    }

    public function insert()
    {
    $model = model(TimelineModel::class);

    $model->save([
         'label' => $_POST['label'],
         'sublabel' => $_POST['sublabel'],
         'date_begin' => $_POST['date_begin'],
         'date_end' => $_POST['date_end'], 
         'is_public' => $_POST['is_public'],
         'comment' => $_POST['comment'], ]);

      return($this->display('add_success'));
    }

    public function update()
    {
    //$model = model('App\Models\TimelineModel');
    $model = model(TimelineModel::class);

    $model->replace(['id_timeline' => $_POST['id_timeline'],
        'label' => $_POST['label'],
        'sublabel' => $_POST['sublabel'],
        'date_begin' => $_POST['date_begin'],
        'date_end' => $_POST['date_end'],
        'comment' => $_POST['comment'], ]);

    // Appelle la fonction display pour afficher la page media_update_success
    return($this->display('update_success'));
    }
    
    public function delete()
    {
        $model = model(TimelineModel::class);

        $model->replace(['id_timeline' => $_POST['id_timeline'],]);

    return $this->display('delete_success');
}

}