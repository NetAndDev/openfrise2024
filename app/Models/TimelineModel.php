<?php

namespace App\Models;

use CodeIgniter\Model;

class TimelinetModel extends Model
{
    protected $table = 'TIMELINES';

    //liste des champs autorisés pour l'insertion
    protected $allowedFields =['label', 'sublabel', 'date_begin', 'date_end', 'is_public', 'comment'];

    public function getTimeline($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->where(['id_timeline' => $id])->first();
    }

    /*public function getFieldsNames($field = array (0 => '*')) 
    {
        return $this->select(implode(',', $field))->get()->getFieldNames();
    }

    public function getValue($field = array (0 => '*'))
    {
        return $this->select(implode(',', $field))->get()->getResultArray();
    }*/
     
}
 