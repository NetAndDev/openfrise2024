<?php
namespace App\Models;

use CodeIgniter\Model;
class TypemediaModel extends Model
{ 
    protected $table = 'TYPES_MEDIAS' ;
    public function getTypemedia($id = false)
    {
        if ($id === false){
        return $this->findAll();
        }
    
    return $this->where(['code_type_media' =>$id])->first();
    }
}