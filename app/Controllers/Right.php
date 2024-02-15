<?php

namespace App\Controllers;

class Right extends BaseController
{
    /*public function index(): string
    {
     return view('right/right_index');
}

    public function add()
    {
        return view('right/right_add');
    }

    public function list()
    {
        return view('right/right_list');
    }*/

    public function menu()
    {
        return view('right/right_menu');
    }
    
    public function display($page = 'menu')
    {
        if (! is_file(APPPATH . 'Views/right/right_' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        $model = model('App\Models\RightModel');
        $data['right'] = $model->getRight();

        if($page == 'detail'){
            $detail = $this->request->getGet();
            $data['detail'] = $model->getRight($detail); 
        }

        return view('/right/right_' . $page, $data);
    }




    public function find($id_user = false)
    {
        $model = model(RightModel::class);

        $data['user'] = $model->getUser($id_user);

        $page = 'detail';

        if (! is_file(APPATH . 'Views/right/right_' . $page . '.php')) {
            throw new PageNotFoundException($page);

        }

        $data['title'] = ucfirst($page);
        $data['numero'] = 123;

        return view('right/right_' . $page, $data);
    }
    

    public function insert()
 {
    $model = model('App\Models\RightModel');

    $model->save([
    'label' => $_POST['label'],
    'comment' => $_POST['comment']
    // pour la mise en point, le mot de passe est mis en commentaire
    ]);

 return($this->display('add_success'));

 }

}