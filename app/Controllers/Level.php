<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException; // Add this line

class Level extends BaseController
{
    public function index()
    {
        return view('templates/header', $data)
            . view('level/' . $page)
            . view('templates/footer');
    }

    public function view($page = 'menu')
    {
        if (! is_file(APPPATH . 'Views/level/level_' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        $model = model('App\Models\LevelModel');
        $data['level'] = $model->getLevel();

        if($page == 'detail' || $page == 'update' || $page == 'delete'){
            $detail = $this->request->getGet();
            $data['detail'] = $model->getLevel($detail);    
            
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        return view('templates/header', $data)
            . view('level/level_' . $page)
            . view('templates/footer',$data);
    }

    public function insert()
    {
        $model = model('App\Models\LevelModel');    

        $model->save([
        'label' => $_POST['label'],
        'comment' => $_POST['comment']
        ]);

        return($this->view('add_success'));
        }

    public function update()
    {
        $model = model('App\Models\LevelModel');    

        $model->replace(['id_level'=> $_POST['id_level'],
        'label' => $_POST['label'],
        'comment' => $_POST['comment']
        ]);

        return($this->view('update_success'));
        }

    public function delete()
    {
        $model = model('App\Models\LevelModel');    
    
        $sql = "DELETE FROM BDD_LEVELS WHERE id_level = ?";

        $model -> query ($sql, $_POST[id_level]);
    
         return($this->view('delete_success'));
         }



}