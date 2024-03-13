<?php

namespace App\Models;

use CodeIgniter\Model;

class TeamModel extends Model
{
    protected $table = 'TEAMS';

    protected $allowedFields = ['id_team','name','comment','date_create','date_update'];


    public function getTeam($id = false){
        
        if($id === false){
            return $this->findAll();
        }
        return $this->where(['id_team' => $id])->first();
    }

    public function teamName($field = array (0 => '*'))
    {
        return $this->query("SELECT " . implode(',', $field) . " FROM BDD_TEAMS")->getFieldNames();
    }
}