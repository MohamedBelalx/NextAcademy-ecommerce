<?php

namespace App\Http\Controllers;

use App\Service\CartService;
use App\Service\ProductsService;
use App\Service\TradeMarkService;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    private $productsService;
    private $tradeMarkService;
    private $cartService;
    public function __construct(ProductsService $productsService, TradeMarkService $tradeMarkService, CartService $cartService)
    {
        $this->productsService = $productsService;
        $this->tradeMarkService = $tradeMarkService;
        $this->cartService = $cartService;
    }
    public function index()
    {
        return view('front.products', [
            'products' => $this->productsService->all(),
            'tradeMarks' => $this->tradeMarkService->all(),
            'cartTotalItems' => $this->cartService->getTotalItems()
        ]);
    }

    public function showByTradeMarkId($id)
    {
        return view('front.show', [
            'products' => $this->productsService->getProductsByTradeMarkId($id),
            'tradeMarks' => $this->tradeMarkService->all(),
            'cartTotalItems' => $this->cartService->getTotalItems()
        ]);
    }
}
