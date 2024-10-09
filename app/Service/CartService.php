<?php

namespace App\Service;

use Cart;

class CartService
{
    public function addItem($product)
    {
        return Cart::addItem($product->toArray());
    }

    public function getTotalItems()
    {
        return Cart::getDetails()->quantities_sum;
    }

    public function getCart()
    {
        return Cart::getDetails()->items;
    }

    public function removeItem($id)
    {
        return Cart::removeItem($id);
    }
    public function updateQuantity($id, $quantity)
    {
        return Cart::updateItem($id, ['quantity' => $quantity]);
    }
    public function getDetails()
    {
        return Cart::getDetails();
    }

    public function reset()
    {
        return Cart::reset();
    }
}
