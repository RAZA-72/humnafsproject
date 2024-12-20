<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\RegisterModel;

class AdminController extends BaseController
{
    public function admin(): string
    {
        return view('backend/login');
    }

    public function login()
    {

        $userid = $this->request->getpost('loginid');
        $password = $this->request->getpost('password');

        $model = new AdminModel();

        $id = $model->where('username', $userid)->first();

        $passwordnew = $model->where('password', $password)->first();


        if ($id && $passwordnew) {

            $output = view('templates/commonheader');
            $output .= view('templates/sideview');
            $output .= view('templates/commonfotter');
            return $output;
        } else {
            echo "user if or pasword wrong";
        }


    }


    public function store()
    {

        $product = '';

        $product = $this->request->getFile('product');
        if ($product && $product->isValid()) {
            $customerPhotoPath = 'assets/uploads/' . $product->getName();
            $product->move('assets/uploads/');
        }

        $prodcutmodel = new AdminModel();

        $data = [


            'product' => $customerPhotoPath,
            'details' => $this->request->getPost('	details'),
            'price' => $this->request->getPost('	price'),
            'category' => $this->request->getPost('category')

        ];

        $prodcutmodel->insert($data);

        return redirect('/');

    }


    public function term()
    {


        $output = view('templates/frontendheader');

        $output .= view('templates/terms');

        $output .= view('templates/frontendfotter');

        return $output;
    }

    public function back()
    {

        $output = view('templates/frontendheader');

        $output .= view('templates/return');

        $output .= view('templates/frontendfotter');

        return $output;

    }
    public function about()
    {

        $output = view('templates/frontendheader');

        $output .= view('templates/about');

        $output .= view('templates/frontendfotter');

        return $output;

    }


    public function policy()
    {
        $output = view('templates/frontendheader');

        $output .= view('templates/policy');

        $output .= view('templates/frontendfotter');

        return $output;



    }

    public function register()
    {


        $model = new RegisterModel();

        $data = [

            'email' => $this->request->getPost('email'),
            
            'password' => $this->request->getPost('password')



        ];

        $model->insert($data);

        return redirect('files/acount');


    }


    public function contactus(){



        
    }

}
