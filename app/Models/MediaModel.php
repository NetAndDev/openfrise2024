<?php

namespace App\Models;

use CodeIgniter\Model;

class MediaModel extends Model
{
    protected $table = 'MEDIAS';

    public function getMedia($id = false){
        
        if($id === false){
            return $this->findAll();
        }

        return $this->where(['id_media' => $id])->first();
    }
}