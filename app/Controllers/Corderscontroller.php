<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Corderscontroller  extends BaseController{



    public function index(){



        $productModel = new ProductModel();
        $allProducts = $productModel->findAll();
        
        $data['shopkeeper'] = array_filter($allProducts, function ($product) {
            return $product['category_id'] === 'Co-orders Sets';
        });
        
        $output  = view('templates/frontendheader');
        $output .= view('files/orders', $data);
        $output .= view('templates/frontendfotter');
        return $output;

    }
}