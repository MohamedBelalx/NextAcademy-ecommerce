<?php

namespace App\Repository\Interface;

interface IOrderDetailsRepository
{
    public function insert(string $id, object $cart);
    public function getAllByMerchant(string $id);
}
