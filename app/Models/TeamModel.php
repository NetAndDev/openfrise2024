<?php

namespace App\Models;

use CodeIgniter\Model;

class TeamModel extends Model
{
    protected $table = 'TEAM';

    public function getTeam ($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }
        return  $this->where(['id_name' => $id])->first();
    }
}