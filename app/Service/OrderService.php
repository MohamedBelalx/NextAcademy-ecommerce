<?php

namespace App\Service;

use App\Repository\Interface\IOrderRepository;

class OrderService
{
    private $orderRepository;
    public function __construct(IOrderRepository $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }
    public function place(string $id, string $total)
    {
        return $this->orderRepository->place($id, $total);
    }
}
