<?php

namespace App\Http\Controllers;

use Items;
use App\Models\Item;
use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Stock',
            'items' => Item::all()
        ];

        return view('stocks.stock', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'Add Stock',
            'supplier' => Supplier::all()
        ];

        return view('stocks.addStock', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'supplier_id' => 'required',
            'price' => 'required|integer',
            'value' => 'required|integer',
        ]);

        Item::create($validatedData);

        return redirect('/stock')->with('toast_success', 'Items has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item, $id)
    {
        $items = $item->find($id);
        $data = [
            'title' => 'Edit Stock',
            'item' => $items,
            'supplier' => Supplier::all()
        ];
        return view('stocks.editStock', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $items = Item::find($id);

        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required|integer',
            'value' => 'required|integer',
        ]);

        $items->update($validatedData);

        return redirect('/stock')->with('toast_success', 'Items has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Item::destroy('id', $id);

        return redirect('/stock')->with('toast_error', 'Items has been removed');
    }
}
