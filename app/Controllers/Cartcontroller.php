<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class CartController extends Controller
{
    public function cart()
    {
        // Load the cart session or initialize it if not set
        $session = session();
        $cart = $session->get('cart') ?? [];

        return view('cart/index', ['cart' => $cart]);
    }

    public function add()
    {
        $session = session();

        // Example product data (replace with real product details from your database)
        $productId = $this->request->getPost('id');
        $productName = $this->request->getPost('name');
        $productPrice = $this->request->getPost('price');
        $quantity = $this->request->getPost('quantity');

        // Get the current cart from the session
        $cart = $session->get('cart') ?? [];

        // Check if the product already exists in the cart
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += $quantity;
        } else {
            $cart[$productId] = [
                'id' => $productId,
                'name' => $productName,
                'price' => $productPrice,
                'quantity' => $quantity,
            ];
        }

        // Save the updated cart back to the session
        $session->set('cart', $cart);

        return redirect()->to('/cart')->with('success', 'Product added to cart.');
    }

    public function remove($productId)
    {
        $session = session();
        $cart = $session->get('cart') ?? [];

        // Remove the product from the cart
        unset($cart[$productId]);

        // Save the updated cart back to the session
        $session->set('cart', $cart);

        return redirect()->to('/cart')->with('success', 'Product removed from cart.');
    }

    public function clear()
    {
        session()->remove('cart');
        return redirect()->to('/cart')->with('success', 'Cart cleared.');
    }
}
