<?php

namespace App\Models;

use CodeIgniter\Model;

class TimelineModel extends Model
{
    protected $table = 'Timelines';

    public function getTimeline($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } 

        return $this->where(['id_timeline' => $id])->first();
    }

}