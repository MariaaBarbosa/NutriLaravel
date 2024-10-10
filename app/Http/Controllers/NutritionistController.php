<?php
namespace App\Http\Controllers;

use App\Models\Nutritionist;
use Illuminate\Http\Request;

class NutritionistController extends Controller
{
    public function store(Request $request)
    {
        $nutritionist = new Nutritionist();
        $nutritionist->name=$request->name;
        $nutritionist->email = $request->email;
        $nutritionist->password = $request->password;
        $nutritionist->function = $request->function;
        
        $nutritionist->save();
        return response()->json(['message' => 'Nutricionista cadastrado com sucesso!'], 201);
    }

    public function test(){
        return response()->json(['message' => 'Teste de nutricionista!'], 200);
    }
}
