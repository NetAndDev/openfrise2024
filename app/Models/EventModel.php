<?php

namespace App\Models;

use CodeIgniter\Model;

class EventModel extends Model
{
    protected $table = 'EVENTS';

    public function getEvent($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->where(['id_timeline' => $id])->first();
    }

    public function getFieldsNames($field = array (0 => '*')) 
    {
        return $this->select(implode(',', $field))->get()->getFieldNames();
    }

    public function getValue($field = array (0 => '*'))
    {
        return $this->select(implode(',', $field))->get()->getResultArray();
    }
}