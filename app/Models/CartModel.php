<?php

namespace App\Models;

use CodeIgniter\Model;

class CartModel extends Model
{
    protected $table = 'cart';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'product_id', 'quantity'];

    // Fetch cart details with product info
    public function getCart($userId)
    {
        return $this->select('cart.id, cart.quantity, producttable.product_name, producttable.productprice, producttable.Productimage')
            ->join('producttable', 'producttable.id = cart.product_id')
            ->where('cart.user_id', $userId)
            ->findAll();
    }
}
