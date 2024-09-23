<?php

namespace App\Repository;

use App\Http\Requests\TradeMarkRequest;
use App\Repository\Interface\ITradeMarkRepository;
use App\Models\TradeMark;

class TradeMarkRepository implements ITradeMarkRepository
{
    public function store($tradeMarkDTO)
    {
        TradeMark::create($tradeMarkDTO->toArray());
    }

    public function all(){
        return TradeMark::all();
    }
}
