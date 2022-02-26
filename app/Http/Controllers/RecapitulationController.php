<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Recapitulation;
use App\Http\Controllers\Controller;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class RecapitulationController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Recapitulation',
            'recap' => Recapitulation::all()
        ];

        return view('recapitulation', $data);
    }

    public function store(Request $request)
    {
        $idRecap = IdGenerator::generate(['table' => 'recapitulations', 'field' => 'number', 'length' => 12, 'prefix' => "TRX" . date('ym')]);

        $recap = [
            'number' => $idRecap,
            'user_id' => $request->user_id,
            'item' => $request->item,
            'total_item' => $request->total_item,
            'total_price' => $request->total_price,
        ];

        Recapitulation::create($recap);

        Order::truncate();

        return redirect('/recapitulation');
    }

    public function destroy($id)
    {
        Recapitulation::destroy('id', $id);

        return redirect('/recapitulation');
    }

    public function show()
    {
        $data = [
            'title' => 'Export To PDF',
            'recap' => Recapitulation::all()
        ];

        return view('print', $data)->with('toast_error', 'Transaction has been deleted');
    }
}
