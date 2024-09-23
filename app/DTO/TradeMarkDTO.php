<?php

namespace App\DTO;

use Spatie\LaravelData\Data;

class TradeMarkDTO extends Data
{
    public function __construct(public string $title) {}
}
