<?php

namespace App\Http\Controllers;

use App\Service\TradeMarkService;
use Illuminate\Http\Request;

class TradeMarkController extends Controller
{
    private $tradeMarkService;
    public function __construct(TradeMarkService $tradeMarkService)
    {
        $this->tradeMarkService = $tradeMarkService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('trademark.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->tradeMarkService->store();
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
