<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Form extends BaseController
{
	public function index()
	{
        helper(['form']);
        $data = ["meta_title" => 'Form Validation', "title" => 'this is Form Validation page', 'categories' => ['Student', 'teacher']];

        if ($this->request->withMethod('post')){
            $rules = [
                'name' => 'required|max_length[255]',
                'email' => 'required|valid_email',
                'password' => 'required|min_length[8]',
                'category' => 'in_list[student, teacher]',
                'date' =>[
                    'rules' => 'required|date_check',
                    'label' => 'Date',
                    'errors' => [
                        'date_check' => 'you can\'t add a date before today'
                    ]
                ]
            ];
            if ($this->validate($rules)){
                return redirect()->to('/form/success');
            }else{
                $data['errors'] = $this->validator;
            }
        }
        return view('form', $data);
	}

	public function success(){
	    return "You passed validation , Congrats";
    }
}
