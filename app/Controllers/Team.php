<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class Team extends BaseController
{
    public function display($page="menu")   
     {
        if(! is_file(APPPATH. 'Views/team/team_'.$page.'.php')){
            throw new PageNotFoundException($page);
        }
        $model_team = model('TeamModel');

        $data = [
            'data_n'     => $model_team->getTeam(),
            'teamName' => $model_team->teamName(),
            'teamtest' => $model_team->teamName(['id_team', 'name']),
        ];
        return view('team/team_'. $page,$data); //$data [(numéro => 123)] 
    }

}