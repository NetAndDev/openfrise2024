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

        $data ['title'] = ucfirst($page);
        $data ['numero'] = 123;
        return view('team/team_'. $page,$data); //$data [(numéro => 123)] 
    }

}