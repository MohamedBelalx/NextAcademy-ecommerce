<?php

namespace App\Repository;

use App\Models\OrderDetails;
use App\Repository\Interface\IOrderDetailsRepository;
use App\Repository\Interface\IProductsRepository;

class OrderDetailsRepository implements IOrderDetailsRepository
{
    private $productsRepository;
    public function __construct(IProductsRepository $productsRepository)
    {
        $this->productsRepository = $productsRepository;
    }
    public function insert(string $id, object $cart)
    {

        foreach ($cart as $item) {
            OrderDetails::create([
                'order_id' => $id,
                'product_id' => $item->id,
                'quantity' => $item->quantity,
                'merchant_id' => $this->productsRepository->findById($item->id)->merchant_id
            ]);
        }
    }
    public function getAllByMerchant(string $id)
    {
        return OrderDetails::where('merchant_id', $id)->get();
    }
}
