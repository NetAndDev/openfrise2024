<?php

namespace App\Models;

use CodeIgniter\Model;

class RightModel extends Model
{
    protected $table = 'RIGHTS';

    public function getRight($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->where(['id_right' => $id])->first();
    }
}