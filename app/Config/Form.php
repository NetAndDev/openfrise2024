<?php
// https://codeigniter.com/user_guide/libraries/validation.html#form-validation-tutorial

namespace App\Controllers;

class Form extends BaseController
{
    protected $helpers = ['form'];

    public function index()
    {
        // si ce n'est pas un ppost
        if (! $this->request->is('post')) {
            return view('signup');
        }

        // règles commme VARCHAR(50)
        $rules = [
            // @TODO
        ];

        // je comprend pas trop 
        $data = $this->request->getPost(array_keys($rules));

        // si les données ne sont pas conforme aux règles alors
        if (! $this->validateData($data, $rules)) {
            return view('signup');
        }

        // If you want to get the validated data.
        $validData = $this->validator->getValidated();

        return view('success');
    }
}