<?php

namespace App\Controllers;
 
class Accountcontroller  extends BaseController{



    public function index(){



        $output =  view('templates/frontendheader');
        $output .= view('files/acount');
        $output .=view('templates/frontendfotter');
        return $output;

    }
}