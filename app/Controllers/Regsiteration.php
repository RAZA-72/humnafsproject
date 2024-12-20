<?php

namespace App\Controllers;

use App\Models\RegisterModel;
use App\Models\UserModel;

class Regsiteration extends BaseController
{


    public function login()
    {

        $userid = $this->request->getpost('email');
        $password = $this->request->getpost('password');

        $model = new RegisterModel();

        $id = $model->where('username', $userid)->first();

        $passwordnew = $model->where('password', $password)->first();


        if ($id && $passwordnew) {

            $output = view('templates/commonheader');
            $output .= view('files/useraccount');
            $output .= view('templates/commonfotter');
            return $output;
        } else {
            echo "user if or pasword wrong";
        }


    }

    public function useregister()
    {


        $user = new UserModel();

        $data = [

            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password')


        ];

        $user->insert($data);


        return redirect('files/acount');



    }
}