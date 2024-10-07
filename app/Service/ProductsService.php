<?php

namespace App\Service;

use App\Repository\Interface\IProductsRepository;
use App\DTO\productsDTO;

class ProductsService
{
    private $productsRepository;
    public function __construct(IProductsRepository $productsRepository)
    {
        $this->productsRepository = $productsRepository;
    }

    public function store($productsDTO)
    {
        $this->productsRepository->store($productsDTO);
    }

    public function update($productsDTO, String $id)
    {
        $this->productsRepository->update($productsDTO, $id);
    }

    public function all()
    {
        return $this->productsRepository->all();
    }

    public function destroy(string $id)
    {
        return $this->productsRepository->destroy($id);
    }

    public function findById(string $id)
    {
        return $this->productsRepository->findById($id);
    }
    public function getProductsByTradeMarkId(string $id){
        return $this->productsRepository->getProductsByTradeMarkId($id);
    }
}
