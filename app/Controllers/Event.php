<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class Event extends BaseController
{
    public function display($page = "menu")
    {
        if (!is_file(APPPATH . 'Views/event/event_' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        $model_mael = model('EventModel');
        $nom = array(
            'id_timeline' => 'Identifiant Timeline',
            'id_event'    => 'Identifiant Event',
            'label'       => 'Titre',
            'sublabel'    => 'Sous-titre',
            'is_ponctual' => 'Est Ponctuel',
            'date_begin'  => 'Date de Début',
            'date_end'    => 'Date de Fin',
            'comment'     => 'Commentaire',
            'date_create' => 'Date Création',
            'date_update' => 'Date Mise à Jour'
        );
        $data = [
            'fields' => $model_mael->getFieldsNames(),
            'value' => $model_mael->getValue(),
            'nom' => $nom
        ];

        /*
        si page = add (si on va sur add)
        alors
        avec le $POST (car acction="")
        faire des tests par apport u contenu de $POST
        si c'est bon
        alors
        model->insert(Array)

        ou mettre ces tests dans le modèle 
        donc appeler une proc qui ferait ça
        */
        if ($page == 'add') {
            if (!empty($this->request->getPost())) {
                $data = $this->request->getPost();
                //array_push($data, $this->request->getPost());
            }
        }
        $get = $this->request->getGet();
        if ($page == 'detail') {
            if (!empty($this->request->getGet()['id_event'])) {
                $data = [
                    'fields' => $model_mael->getFieldsNames(),
                    'value' => $model_mael->getEvent($get['id_timeline'], $get['id_event']),
                    'nom' => $nom
                ];
            }
        }


        return view('event/event_' . $page, $data);
    }
}
