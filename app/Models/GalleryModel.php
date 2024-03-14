<?php

namespace App\Models;

use CodeIgniter\Model;

class EventModel extends Model
{
    protected $table ='GALLERIES';

    // liste des champs autorisés pour l'insertion
    protected $allowedFields = ['label', 'sublabel', 'comment'];
    
    public function getGallery($id = false)
    {
        if ($id === false){

            return $this->findAll();

        }

        return $this->where(['id_gallery'=> $id])->first();
    }

    public function getFieldsNames($field = array (0=>'*'))
    {
        return $this->select(implode(',',$field))->get()->getFieldNames();
    }

    Public function getValue($field = array (0 => '*'))
    {
        return $this->select(implode(',',$field))->get()->getResultArray();
    }
    public function getUser($id = false)
{
if ($id === false) {
return $this->findAll();
}

return $this->where(['id_user' => $id])->first();
}
}
?>