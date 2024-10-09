<?php

namespace App\Repository\Interface;

interface IOrderRepository
{
    public function place(string $id, string $total);
}
