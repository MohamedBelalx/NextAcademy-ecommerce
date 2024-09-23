<?php

namespace App\Repository\Interface;

use App\DTO\TradeMarkDTO;
use App\Http\Requests\TradeMarkRequest;

interface ITradeMarkRepository
{
    public function store(TradeMarkDTO $tradeMarkDTO);
    public function all();
}
