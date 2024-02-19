<?php
// https://codeigniter.com/user_guide/libraries/validation.html#form-validation-tutorial

namespace App\Controllers;


class Form extends BaseController
{
    protected $helpers = ['form'];

    public function index(): string
    {
        helper('form');

        if (!$this->request->is('post')) {
            return view('event/event_menu');
        }

        // AFAIRE
        // gérer les erreurs pour retourner des valeurs par défaut
        // là c'est des str '' qui sont retrounés pas NULL
        $rules = [
            'label' => 'max_length[100]',
            'sublabel' => 'max_length[100]',
            'is_ponctual' => 'in_list[0,1]', // plus simple que d'ajouter plein de règles
            'date_begin' => 'max_length[50]',
            'date_end' => 'max_length[50]',
            'comment' => 'max_length[500]'
        ];
        $data = $this->request->getPost(array_keys($rules));

        if (!$this->validateData($data, $rules)) {
            return view('event/event_menu');
        }

        return view('event/event_insert', $data);
    }
}
