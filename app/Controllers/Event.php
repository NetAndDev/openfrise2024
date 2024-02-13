<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class Event extends BaseController
{
    public function display($page="menu") 
    {
        if (! is_file(APPPATH . 'Views/event/event_' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        $model_mael = model('EventModel');
        $array_test = array (
            'label',
            'sublabel',
            'is_ponctual',
            'date_begin',
            'date_end',
            'comment' 
        );
        $data = [
            'fields' => $model_mael->getFieldsNames($array_test),
            'value' => $model_mael->getValue($array_test),
            'nom' => array(
                'id_timeline' => 'Identifiant timeline?',
                'id_event'    => 'Identifiant event?',
                'label'       => 'Titre',
                'sublabel'    => 'Sous-titre',
                'is_ponctual' => 'Est Ponctuel',
                'date_begin'  => 'Date de Début',
                'date_end'    => 'Date de Fin',
                'comment'     => 'Commentaire',
                'date_create' => '???',
                'date_update' => '???'
            )
        ];
        
        
        return view('event/event_'.$page, $data);
    }
}