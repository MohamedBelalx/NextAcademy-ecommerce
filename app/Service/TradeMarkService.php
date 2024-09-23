<?php

namespace App\Service;

use App\Repository\Interface\ITradeMarkRepository;

class TradeMarkService
{
    private $tradeMarkRepository;
    public function __construct(ITradeMarkRepository $tradeMarkRepository)
    {
        $this->tradeMarkRepository = $tradeMarkRepository;
    }

    public function store()
    {
        $this->tradeMarkRepository->store();
    }
}
