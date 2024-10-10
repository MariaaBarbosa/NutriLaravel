<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use Illuminate\Http\Request;

class MealController extends Controller
{ 
    public function store(Request $request)
    {
        $meal = new Meal();
        $meal->data=$request->data;
        $meal->tipo = $request->tipo;
        $meal->save();
        return response()->json(['message' => 'Refeição cadastrada com sucesso!'], 201);
    }

    public function test(){
        return response()->json(['message' => 'Teste de refeicao!'], 200);
    }
}
