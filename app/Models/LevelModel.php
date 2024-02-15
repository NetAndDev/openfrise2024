<?php

namespace App\Models;

use CodeIgniter\Model;

class LevelModel extends Model
{
    protected $table = 'LEVELS';

    // liste des champs autorisés pour l'insertion
    protected $allowedFields = ['label','comment'];

    public function getLevel($id = false){
        
        if($id === false){
            return $this->findAll();
        }

        return $this->where(['id_level' => $id])->first();
    }
}
