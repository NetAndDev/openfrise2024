<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

use App\Models\HyphenModel;

class Hyphen extends BaseController

{
    public function index()
    {
        return view('hyphen/hyphen_menu');
    }


    public function display($page= 'menu') :string
    {
        

        if (! is_file(APPPATH . 'Views/hyphen/hyphen_' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        $model = model('HyphenModel');

        $array_test = array (
            'date_begin',
            'date_end',
            'comment'
        );

        $data =  [
            'fields' => $model->getFieldsNames($array_test),
            'value' => $model->getValues($array_test),
            'nom' => array(
            'date_begin'  => 'Date de Début ',
            'date_end'    => 'Date de Fin ',
            'comment'     => 'Commentaire ',
            )
            
    ]; 
        return view('hyphen/hyphen_'.$page, $data);
    }

    public function insert()
    {
        $model = model('HyphenModel');

        $model->save ([
            'date_begin'    => $_POST['date_begin'],
            'date_end'      => $_POST['date_end'],
            'comment'       => $_POST['comment'],
        ]);

        return($this->display('add_success'));
    }


}