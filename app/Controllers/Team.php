<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class Team extends BaseController
{
    public function menu()
    {
        return view('team/team_menu');
    }

    public function display($page = "menu")
    {
        if (!is_file(APPPATH . 'Views/team/team_' . $page . '.php')) {
            throw new PageNotFoundException($page);
        }
        $model_team = model('App\Models\TeamModel');

        $data = [
            'data_n' => $model_team->getTeam(),
            'teamName' => $model_team->teamName(),
            'teamtest' => $model_team->teamName(['id_team','name', 'comment', 'date_create', 'date_update']),
        ];
        return view('team/team_' . $page, $data);
    }

    public function insert()
{
        // helper('form');

        
    $model = model('App\Models\TeamModel');

     $model->save([
         'name' => $_POST['name'],
         'comment' => $_POST['comment'],
         'date_create' => $_POST['date_create'],
         'date_update' => $_POST['date_update']
     ]); // WORK

    return $this->display('add_success');
}

public function update(){

    $model = model('App\Models\TeamModel');

    $model->replace(['id_team' => $_POST['id_team'],
        'name' => $_POST['name'],
        'comment' => $_POST['comment'],
        'date_create' => $_POST['date_create'],
        'date_update' => $_POST['date_update']
    ]); // Work

    // Appelle la fonction display pour afficher la page media_update_success
    return($this->display('update_success'));
    }
}