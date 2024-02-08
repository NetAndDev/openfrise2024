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

    public function m($field = array (0 => '*'))
    {
        return $this->query("SELECT " . implode(',', $field) . " FROM BDD_EVENTS")->getFieldNames();
    }

    public function l($field = array (0 => '*'))
    {
        return $this->select(implode(',', $field))->get()->getResultArray();
    }

    public function p($field = array (0 => '*'))
    {
        return $this->select(implode(',', $field))->get()->getFieldNames();
    }
}