<?php

namespace App\Http\Controllers;

use App\Service\CartService;
use App\Service\OrderDetailsService;
use App\Service\OrderService;
use Illuminate\Http\Request;
use Auth;

class OrderController extends Controller
{
    private CartService $cartService;
    private OrderService $orderService;
    private OrderDetailsService $orderDetailsService;
    public function __construct(CartService $cartService, OrderService $orderService, OrderDetailsService $orderDetailsService)
    {
        $this->cartService = $cartService;
        $this->orderService = $orderService;
        $this->orderDetailsService = $orderDetailsService;
        $this->middleware('auth');
    }

    public function place()
    {
        $order = $this->orderService->place(Auth::id(), $this->cartService->getDetails()->total);
        $orderDetails = $this->orderDetailsService->insert($order->id, $this->cartService->getCart());
        $this->cartService->reset();
        return redirect()->route('main');
    }

    public function show()
    {
        return view('order.show', [
            'orders' => $this->orderDetailsService->getAllByMerchant(Auth::id())
        ]);
    }
}
