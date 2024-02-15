<?php
namespace App\Models;

use CodeIgniter\Model;
class TypemediaModel extends Model
{ 
    protected $table = 'TYPES_MEDIAS';

    // liste des champs autorisés pour l'insertion
    protected $allowedFields = ['code_type_media', 'label','icon', 'icon_ori', 'comment'];

    public function getTypemedia($id = false)
    {
        if ($id === false){
            return $this->findAll();
        }
    
        return $this->where(['code_type_media' =>$id])->first();
    }

    public function dell($data = array (0 => '*'))
    {
        return $this->select($data)->findAll();
    }

    public function daily($data = array (0 => '*'))
    {
        return $this->select($data)->findAll();
    }
 }
 