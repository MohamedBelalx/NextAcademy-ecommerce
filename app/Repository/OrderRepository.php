<?php

namespace App\Repository;

use App\Repository\Interface\IOrderRepository;
use App\Models\Order;
class OrderRepository implements IOrderRepository
{
    public function place(string $id, string $total)
    {
        return Order::create([
            'total' => $total,
            'customer_id' => $id,
        ]);
    }
}
