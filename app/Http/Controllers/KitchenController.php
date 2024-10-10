<?php

namespace App\Http\Controllers;

use App\Models\Kitchen;
use Illuminate\Http\Request;

class KitchenController extends Controller
{
    public function store(Request $request)
    {
        $kitchen = new Kitchen();
        $kitchen->data=$request->data;
        $kitchen->cafe_da_manha_feito= $request->cafe_da_manha_feito;
        $kitchen->cafe_da_manha_desperdicio=$request->cafe_da_manha_desperdicio;
        $kitchen->almoco_feito = $request->almoco_feito;
        $kitchen->almoco_desperdicio=$request->almoco_desperdicio;
        $kitchen->cafe_da_tarde_feito = $request->cafe_da_tarde_feito;
        $kitchen->cafe_da_tarde_desperdicio=$request->cafe_da_tarde_desperdicio;
        $kitchen->save();
        return response()->json(['message' => 'Cozinha cadastrada com sucesso!'], 201);
    }

    public function test(){
        return response()->json(['message' => 'Teste de cozinha!'], 200);
    }
}
