<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function store(Request $request)
    {
        $report = new Report();
        $report->inicio_data=$request->inicio_data;
        $report->fim_data = $request->fim_data;
        $report->observacao = $request->observacao;
        $report->save();
        return response()->json(['message' => 'Relatório cadastrado com sucesso!'], 201);
    }

    public function test(){
        return response()->json(['message' => 'Teste de relatório!'], 200);
    }
}
