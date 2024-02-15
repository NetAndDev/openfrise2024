<?php

namespace App\Models;

use CodeIgniter\Model;

class MediaModel extends Model
{
    protected $table = 'MEDIAS';

    protected $allowedFields = ['label','sublabel','legend','source','filename','filename_ori','code_license','code_type_media','comment'];

    public function getMedia($id = false){
        
        if($id === false){
            return $this->findAll();
        }

        return $this->where(['id_media' => $id])->first();
    }
}