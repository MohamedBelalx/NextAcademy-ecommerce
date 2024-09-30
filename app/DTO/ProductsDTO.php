<?php

namespace App\DTO;

use App\Http\Requests\ProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use Spatie\LaravelData\Data;
use Auth;

class ProductsDTO extends Data
{
    public function __construct(
        public string $title,
        public string $decription,
        public int $price,
        public int $stock,
        public int $trade_mark_id,
        // public int $merchant_id,
        // public string $img,
    ) {}


    public static function handleInputs(ProductsRequest $request)
    {
        $data = [
            'title' => $request->title,
            'decription' => $request->decription,
            'price' => $request->price,
            'stock' => $request->stock,
            'trade_mark_id' => $request->trade_mark_id,
            'merchant_id' => Auth::id(),
        ];

        if ($request->img) {
            $img = $request->img;
            $img_new_name = time() . $img->getClientOriginalName();
            $img->move('img/', $img_new_name);
            $data['img'] = 'img/' . $img_new_name;
        }
        return $data;
    }
    public static function handleUpdateInputs(UpdateProductsRequest $request)
    {
        $data = [
            'title' => $request->title,
            'decription' => $request->decription,
            'price' => $request->price,
            'stock' => $request->stock,
            'trade_mark_id' => $request->trade_mark_id,
            'merchant_id' => Auth::id(),
        ];

        if ($request->img) {
            $img = $request->img;
            $img_new_name = time() . $img->getClientOriginalName();
            $img->move('img/', $img_new_name);
            $data['img'] = 'img/' . $img_new_name;
        }
        return $data;
    }

}
