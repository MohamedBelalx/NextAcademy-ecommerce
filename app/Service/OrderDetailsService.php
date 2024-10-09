<?php

namespace App\Service;

use App\Repository\Interface\IOrderDetailsRepository;

class OrderDetailsService
{
    private $orderDetailsRepository;
    public function __construct(IOrderDetailsRepository $orderDetailsRepository)
    {
        $this->orderDetailsRepository = $orderDetailsRepository;
    }
    public function insert(string $id, object $cart)
    {
        return $this->orderDetailsRepository->insert($id, $cart);
    }
    public function getAllByMerchant(string $id) {
        return $this->orderDetailsRepository->getAllByMerchant($id);
    }
}
