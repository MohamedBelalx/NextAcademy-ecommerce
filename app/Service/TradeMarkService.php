<?php

namespace App\Service;

use App\DTO\TradeMarkDTO;
use App\Http\Requests\TradeMarkRequest;
use App\Repository\Interface\ITradeMarkRepository;

class TradeMarkService
{
    private $tradeMarkRepository;
    public function __construct(ITradeMarkRepository $tradeMarkRepository)
    {
        $this->tradeMarkRepository = $tradeMarkRepository;
    }

    public function store(TradeMarkDTO $tradeMarkDTO)
    {
        $this->tradeMarkRepository->store($tradeMarkDTO);
    }

    public function update(TradeMarkDTO $tradeMarkDTO, String $id)
    {
        $this->tradeMarkRepository->update($tradeMarkDTO, $id);
    }

    public function all()
    {
        return $this->tradeMarkRepository->all();
    }

    public function destroy(string $id)
    {
        return $this->tradeMarkRepository->destroy($id);
    }

    public function findById(string $id)
    {
        return $this->tradeMarkRepository->findById($id);
    }
}
