<?php

namespace App\Models;

use CodeIgniter\Model;

class EventModel extends Model
{
    protected $table = 'EVENTS';

    public function getEvent($id_timeline = false, $id_event = false)
    {
        if ($id_timeline === false && $id_event === false) {
            return $this->findAll();
        }

        return $this->where(['id_timeline' => $id_timeline, 'id_event' => $id_event])->first();
    }

    public function getFieldsNames($field = array (0 => '*')) 
    {
        return $this->select(implode(',', $field))->get()->getFieldNames();
    }

    public function getValue($field = array (0 => '*'))
    {
        return $this->select(implode(',', $field))->get()->getResultArray();
    }

    public function insetEvent() {
        return null;
    }
}