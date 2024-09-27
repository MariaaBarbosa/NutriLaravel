<?php
namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function store(Request $request)
    {
        $student = new Student();
        $student->name=$request->nome;
        $student->email = $request->email;
        $student->password = $request ->senha;
        $student -> rm = $request -> rm;
        $student->save();
        return response()->json(['message' => 'Aluno cadastrado com sucesso!'], 201);
    }

    public function test(){
        return response()->json(['message' => 'Aluno cadastrado com sucesso!'], 201);
    }
}
