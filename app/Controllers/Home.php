<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {

        $ouput = view('templates/frontendheader');
        $ouput .=view('welcome_message');
        $ouput .= view('templates/frontendfotter');

        return $ouput;
       
    }


    public function contact(){

        $ouput = view('templates/frontendheader');
        $ouput .=view('files/contact');
        $ouput .= view('templates/frontendfotter');

        return $ouput;



    }

    

}


