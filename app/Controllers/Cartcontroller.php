<?php

namespace App\Controllers;

use App\Models\CartModel;
use App\Models\ProductModel;

class CartController extends BaseController
{
    private $userId = 1; // Replace this with the logged-in user's ID

    // Display the cart
    public function index()
    {
        $cartModel = new CartModel();
        $cart = $cartModel->getCart($this->userId);

        return view('cart/index', ['cart' => $cart]);
    }

    // Add product to the cart
    public function add($productId)
    {
        $productModel = new ProductModel();
        $product = $productModel->find($productId);

        if (!$product) {
            return redirect()->to('/products')->with('error', 'Product not found');
        }

        $cartModel = new CartModel();
        $existingCart = $cartModel->where(['user_id' => $this->userId, 'product_id' => $productId])->first();

        if ($existingCart) {
            // Increment quantity if the product already exists in the cart
            $cartModel->update($existingCart['id'], ['quantity' => $existingCart['quantity'] + 1]);
        } else {
            // Add new product to the cart
            $cartModel->save([
                'user_id' => $this->userId,
                'product_id' => $productId,
                'quantity' => 1,
            ]);
        }

        return redirect()->to('/cart')->with('success', 'Product added to cart');
    }

    // Update product quantity in the cart
    public function update($cartId)
    {
        $quantity = $this->request->getPost('quantity');

        if ($quantity <= 0) {
            return $this->remove($cartId); // Remove if quantity is 0
        }

        $cartModel = new CartModel();
        $cartModel->update($cartId, ['quantity' => $quantity]);

        return redirect()->to('/cart')->with('success', 'Cart updated');
    }

    // Remove product from the cart
    public function remove($cartId)
    {
        $cartModel = new CartModel();
        $cartModel->delete($cartId);

        return redirect()->to('/cart')->with('success', 'Product removed from cart');
    }

    // Clear the entire cart
    public function clear()
    {
        $cartModel = new CartModel();
        $cartModel->where('user_id', $this->userId)->delete();

        return redirect()->to('/cart')->with('success', 'Cart cleared');
    }
}
