<?php

namespace App\Controllers;
use App\Models\ProductModel;


class Sareecontroller  extends BaseController{



    public function saree(){

        $productModel = new ProductModel();
        $allProducts = $productModel->findAll();
        
        $data['shopkeeper'] = array_filter($allProducts, function ($product) {
            return $product['category_id'] === 'Saree';
        });
        
        $output  = view('templates/frontendheader');
        $output .= view('files/saree', $data);
        $output .= view('templates/frontendfotter');
        return $output;
    }

    public function suits(){
        
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

    public function orders(){

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


    public function dress(){


        
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

    public function duppata(){

        $productModel = new ProductModel();
        $allProducts = $productModel->findAll();
        
        $data['shopkeeper'] = array_filter($allProducts, function ($product) {
            return $product['category_id'] === 'Suits';
        });
        
        $output  = view('templates/frontendheader');
        $output .= view('files/dupatta', $data);
        $output .= view('templates/frontendfotter');
        return $output;
        

    }  




    public function productdetail($slugus){


        $productModel = new ProductModel();

          
           $data['shopkeeper'] = $productModel->where('slugus', $slugus)->findAll();
        
          if (empty($data['shopkeeper'])) {
               echo "No records found in the database.";
               exit;
        }

      return view('files/productdetail',$data);


        
    }
    
    public function cart(){



        $output =  view('templates/frontendheader');
        $output .= view('files/cart');
        $output .=view('templates/frontendfotter');
        return $output;

    }


    public function checkout()
    {

        
        $output =  view('templates/frontendheader');
        $output .= view('files/checkout');
        $output .=view('templates/frontendfotter');
        return $output;

    }
    public function wish(){



        $output =  view('templates/frontendheader');
        $output .= view('files/wish');
        $output .=view('templates/frontendfotter');
        return $output;

    }
}