<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class Event extends BaseController
{
    protected $helpers = ['form'];

    public function display($page = "menu")
    {
        if (!is_file(APPPATH . 'Views/event/event_' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }
        helper('form');


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

    public function insert(): string
    {
        helper('form');

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

        // AFAIRE
        // gérer les erreurs pour retourner des valeurs par défaut
        // là c'est des str '' qui sont retrounés pas NULL
        // insert dans le model !!
        $rules = [
            'label' => 'max_length[100]',
            'sublabel' => 'max_length[100]',
            'is_ponctual' => 'in_list[0,1]', // plus simple que d'ajouter plein de règles
            'date_begin' => 'max_length[50]',
            'date_end' => 'max_length[50]',
            'comment' => 'max_length[500]'
        ];

        if (
            (!$this->request->is('post'))
            or
            (!$this->validateData(
                $this->request->getPost(array_keys($rules)),
                $rules
            )
            )
        ) {
            $data = [
                'fields' => $model_mael->getFieldsNames(),
                'value' => $model_mael->getValue(),
                'nom' => $nom
            ];
            return view('event/event_add', $data);
        } else {
            $data = [
                'fields' => $model_mael->getFieldsNames(),
                'value' => $this->request->getPost(array_keys($rules)),
                'nom' => $nom
            ];
            return view('event/event_add_success', $data);
        }
    }
}
