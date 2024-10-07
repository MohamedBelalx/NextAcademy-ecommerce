<?php

namespace App\Http\Controllers;

use App\Service\ProductsService;
use App\Service\TradeMarkService;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    private $productsService;
    private $tradeMarkService;
    public function __construct(ProductsService $productsService, TradeMarkService $tradeMarkService)
    {
        $this->productsService = $productsService;
        $this->tradeMarkService = $tradeMarkService;
    }
    public function index()
    {
        return view('front.products', [
            'products' => $this->productsService->all(),
            'tradeMarks' => $this->tradeMarkService->all()
        ]);
    }

    public function showByTradeMarkId($id)
    {
        return view('front.show', [
            'products' => $this->productsService->getProductsByTradeMarkId($id),
            'tradeMarks' => $this->tradeMarkService->all()

        ]);
    }
}
