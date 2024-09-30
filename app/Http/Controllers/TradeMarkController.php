<?php

namespace App\Http\Controllers;

use App\DTO\TradeMarkDTO;
use App\Http\Requests\TradeMarkRequest;
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
        $tradeMarks = $this->tradeMarkService->all();
        return view('trademark.index', ['tradeMarks' => $tradeMarks]);
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
    public function store(TradeMarkRequest $request)
    {
        $this->tradeMarkService->store(TradeMarkDTO::from($request));
        return redirect()->route('trademark.index');
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
        return view('trademark.edit', ['tradeMark' => $this->tradeMarkService->findById($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TradeMarkRequest $request, string $id)
    {
        $this->tradeMarkService->update(TradeMarkDTO::from($request), $id);
        return redirect()->route('trademark.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->tradeMarkService->destroy($id);
        return redirect()->back();
    }
}
