<?php

namespace App\Repository\Interface;

use App\DTO\TradeMarkDTO;
use App\Http\Requests\TradeMarkRequest;

interface ITradeMarkRepository
{
    public function store(TradeMarkDTO $tradeMarkDTO);
    public function update(TradeMarkDTO $tradeMarkDTO, String $id);
    public function all();
    public function destroy(String $id);
    public function findById(String $id);
}
