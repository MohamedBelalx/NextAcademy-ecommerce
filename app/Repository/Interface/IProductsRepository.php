<?php

namespace App\Repository\Interface;

use App\DTO\ProductsDTO;

interface IProductsRepository
{
    public function store(ProductsDTO $productsDTO);
    public function update(ProductsDTO $productsDTO, String $id);
    public function all();
    public function destroy(String $id);
    public function findById(String $id);
    public function getProductsByTradeMarkId(string $id);
}
