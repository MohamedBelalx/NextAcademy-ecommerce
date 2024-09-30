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

    public function update($tradeMarkDTO, $id)
    {
        $tradeMark = $this->findById($id);
        $tradeMark->update($tradeMarkDTO->toArray());
    }

    public function all()
    {
        return TradeMark::all();
    }

    public function destroy(string $id)
    {
        $tradeMark =  $this->findById($id);

        return $tradeMark->delete();
    }
    public function findById(string $id)
    {
        return TradeMark::findOrFail($id);
    }
}
