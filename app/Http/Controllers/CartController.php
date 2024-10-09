<?php

namespace App\Http\Controllers;

use App\Service\CartService;
use App\Service\ProductsService;
use Illuminate\Http\Request;
use App\Service\TradeMarkService;

class CartController extends Controller
{
    private $cartService;
    private $productsService;
    private $tradeMarkService;
    public function __construct(CartService $cartService, ProductsService $productsService, TradeMarkService $tradeMarkService)
    {
        $this->cartService = $cartService;
        $this->productsService = $productsService;
        $this->tradeMarkService = $tradeMarkService;
    }
    public function add($id)
    {
        $this->cartService->addItem($this->productsService->findById($id));
        return redirect()->back();
    }

    public function show()
    {
        // dd($this->cartService->getDetails());
        return view('front.cart', [
            'cart' => $this->cartService->getCart(),
            'tradeMarks' => $this->tradeMarkService->all(),
            'cartTotalItems' => $this->cartService->getTotalItems(),
            'details' => $this->cartService->getDetails(),
        ]);
    }

    public function delete($id)
    {
        $this->cartService->removeItem($id);
        return redirect()->back();
    }
    public function update($id, Request $request)
    {
        $this->cartService->updateQuantity($id, $request->quantity);
        return redirect()->back();
    }
}
