<?php

namespace App\Http\Controllers;

use App\Models\Inspector;
use Illuminate\Http\Request;

class InspectorController extends Controller
{
      public function store(Request $request)
    {
        $inspector = new Inspector();
        $inspector->name=$request->name;
        $inspector->email = $request->email;
        $inspector->function = $request->function;
        $inspector->password = $request ->password;
        $inspector->save();
        return response()->json(['message' => 'Inspetor cadastrado com sucesso!'], 201);
    }

    public function test(){
        return response()->json(['message' => 'Inspetor cadastrado com sucesso!'], 201);
    }
}

