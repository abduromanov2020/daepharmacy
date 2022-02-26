<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Supplier',
            'supplier' => Supplier::all()
        ];

        return view('suppliers.supplier', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'Add Supplier'
        ];

        return view('suppliers.addSupplier', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required'
        ]);

        Supplier::create($validateData);

        return redirect('/supplier')->with('toast_success', 'Supplier has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        $data = [
            'title' => $supplier->name,
            'item' => $supplier->item,
        ];

        return view('suppliers.detailSupplier', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'title' => 'Edit Supplier',
            'supplier' => Supplier::find($id)
        ];

        return view('suppliers.editSupplier', $data);
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
        $supp = Supplier::find($id);

        $validateData = $request->validate([
            'name' => 'required'
        ]);

        $supp->update($validateData);

        return redirect('/supplier')->with('toast_success', 'Supplier has been added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Supplier::destroy('id', $id);

        return redirect('/supplier')->with('toast_error', 'Supplier has been removed');
    }
}
