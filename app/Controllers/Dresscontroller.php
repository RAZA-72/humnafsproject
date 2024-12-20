<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Dresscontroller  extends BaseController{



    public function index(){


        $productModel = new ProductModel();
        $allProducts = $productModel->findAll();
        
        $data['shopkeeper'] = array_filter($allProducts, function ($product) {
            return $product['category_id'] === 'Dress';
        });
        
        $output  = view('templates/frontendheader');
        $output .= view('files/dress', $data);
        $output .= view('templates/frontendfotter');
        return $output;

    }
}