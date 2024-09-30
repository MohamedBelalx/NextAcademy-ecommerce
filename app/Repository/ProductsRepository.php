<?php

namespace App\Repository;

use App\Repository\Interface\IProductsRepository;
use App\Models\Products;

class ProductsRepository implements IProductsRepository
{
    public function store($productsDTO)
    {
        Products::create($productsDTO);
    }

    public function update($productsDTO, $id)
    {
        $products = $this->findById($id);
        $products->update($productsDTO);
    }

    public function all()
    {
        return Products::all();
    }

    public function destroy(string $id)
    {
        $products =  $this->findById($id);

        return $products->delete();
    }
    public function findById(string $id)
    {
        return Products::findOrFail($id);
    }
}
