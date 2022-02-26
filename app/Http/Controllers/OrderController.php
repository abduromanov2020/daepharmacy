<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Order;
use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class OrderController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Order',
            'items' => Item::All(),
            'order' => Order::all()
        ];

        return view('order', $data);
    }

    public function store(Request $request)
    {
        // $box = Item::find($request->id);

        // return redirect()->route('order')->with([$box]);

        $validatedData = $request->validate([
            'item_id' => 'required',
            'value' => 'required'
        ]);

        Order::create($validatedData);

        return redirect('/order')->with('toast_success', 'Items has been added to chart');
    }



    public function destroy($id)
    {
        Order::destroy('id', $id);

        return redirect('/order')->with('toast_error', 'Items has been removed from chart');
    }

    public function clear()
    {
        Order::truncate();

        return redirect('/order')->with('toast_error', 'The Order has been canceled');
    }
}
