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

    public function l($field = array (0 => '*'))
    {
        return $this->select(implode(',', $field))->get()->getResultArray();
    }

    public function p($field = array (0 => '*'))
    {
        return $this->select(implode(',', $field))->get()->getFieldNames();
    }


    public function getFieldsNames($field = array (0 => '*'))
    {
        return $this->select(implode(',', $field))->get()->getFieldNames();
    }

    public function getValues($field = array (0 => '*'))
    {
        return $this->select(implode(',', $field))->get()->getResultArray();
    }


    /**public function getHyphen($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } 

        return $this->where(['id_hyphen' => $id])->first();
    }**/
}
