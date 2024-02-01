<?php

namespace App\Models;

use CodeIgniter\Model;

class HyphenModel extends Model
{
    protected $table = 'HYPHENS';

    public function getHyphen($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } 

        return $this->where(['id_hyphen' => $id])->first();
    }

}