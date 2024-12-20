<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Suitcontroller  extends BaseController{



    public function index(){



        $productModel = new ProductModel();
        $allProducts = $productModel->findAll();
        
        $data['shopkeeper'] = array_filter($allProducts, function ($product) {
            return $product['category_id'] === 'Suits';
        });
        
        $output  = view('templates/frontendheader');
        $output .= view('files/suits', $data);
        $output .= view('templates/frontendfotter');
        return $output;

    }
}