<?php

namespace App\Models;

use CodeIgniter\Model;

class HyphenModel extends Model
{
    protected $table = 'HYPHENS';

    protected $allowedFields = ['date_begin','date_end','comment'];

    public function getHyphen($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }
        return $this->where(['id_hyphen' => $id])->first();
    }

    public function getFieldsNames($field = array (0 => '*'))
    {
        return $this->select(implode(',', $field))->get()->getFieldNames();
    }

    public function getValues($field = array (0 => '*'))
    {
        return $this->select(implode(',', $field))->get()->getResultArray();
    }
    public function getValuesTimeline($field = array (0 => '*'))
    {
        return $this->select();
    }
    
}