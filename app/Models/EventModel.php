<?php

namespace App\Models;

use CodeIgniter\Model;

class EventModel extends Model
{
    protected $table = 'EVENTS';
    protected $allowedFields = [
        'id_timeline',
        'label',
        'sublabel',
        'is_ponctual',
        'date_begin',
        'date_end',
        'comment'
    ];

    public function getEvent($id_timeline = false, $id_event = false)
    {
        if ($id_timeline === false && $id_event === false) {
            return $this->findAll();
        }

        return $this->where(['id_timeline' => $id_timeline, 'id_event' => $id_event])->first();
    }

    public function getFieldsNames($field = array(0 => '*'))
    {
        return $this->select(implode(',', $field))->get()->getFieldNames();
    }

    public function getValue($field = array(0 => '*'))
    {
        return $this->select(implode(',', $field))->get()->getResultArray();
    }
    public function getTimelines()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('EVENTS');
        $builder->groupBy('TIMELINES.id_timeline');
        $builder->select(['TIMELINES.label', 'TIMELINES.id_timeline']);
        $builder->join('TIMELINES', 'TIMELINES.id_timeline = EVENTS.id_timeline');
        $query = $builder->get();
        return $query->getResultArray();
    }
}