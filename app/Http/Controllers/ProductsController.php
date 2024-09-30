<?php

namespace App\Http\Controllers;

use App\DTO\productsDTO;
use App\DTO\ProductsDTO as DTOProductsDTO;
use Illuminate\Http\Request;
use App\Http\Requests\ProductsRequest;
use App\Service\ProductsService;
use App\Service\TradeMarkService;
use App\Http\Requests\UpdateProductsRequest;
use Auth;

class ProductsController extends Controller
{
    private $productsService;
    private $tradeMarkService;
    public function __construct(ProductsService $productsService, TradeMarkService $tradeMarkService)
    {
        $this->productsService = $productsService;
        $this->tradeMarkService = $tradeMarkService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = $this->productsService->all();
        return view('products.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create', ['tradeMarks' => $this->tradeMarkService->all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductsRequest $request)
    {
        $this->productsService->store(ProductsDTO::handleInputs($request));
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('products.edit', ['products' => $this->productsService->findById($id), 'tradeMarks' => $this->tradeMarkService->all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductsRequest $request, string $id)
    {
        $this->productsService->update(ProductsDTO::handleUpdateInputs($request), $id);
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->productsService->destroy($id);
        return redirect()->back();
    }
}
