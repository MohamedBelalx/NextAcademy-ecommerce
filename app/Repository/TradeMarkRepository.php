<?php

namespace App\Repository;

use App\Repository\Interface\ITradeMarkRepository;
use App\Models\TradeMark;

class TradeMarkRepository implements ITradeMarkRepository
{
    public function store()
    {
        TradeMark::create();
    }
}
