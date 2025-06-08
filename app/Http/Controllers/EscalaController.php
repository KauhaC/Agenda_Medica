<?php

namespace App\Http\Controllers;

use App\Models\Escalas;
use App\Models\Medicos;
use App\Models\Plantoes;
use Illuminate\Http\Request;

class EscalaController extends Controller
{
    public function index()
    {
        $escalas = Escalas::with(['medico', 'plantao'])->get();
        return view('escalas.index', compact('escalas'));
    }

    public function create()
    {
        $medicos = Medicos::all();
        $plantoes = Plantoes::all();
        return view('escalas.create', compact('medicos', 'plantoes'));
    }

    public function store(Request $request)
    {
    $request->validate([
        'medico_id' => 'required|exists:medicos,id',
        'plantao_id' => 'required|exists:plantoes,id',
    ]);

    Escalas::create([
        'id_medico' => $request->medico_id,
        'id_plantao' => $request->plantao_id,
    ]);

    return redirect()->route('escalas.index')->with('success', 'Escala criada com sucesso!');
    }




    public function show(Escalas $escala)
    {
        return view('escalas.show', compact('escala'));
    }

    public function edit(Escalas $escala)
    {
        $medicos = Medicos::all();
        $plantoes = Plantoes::all();
        return view('escalas.edit', compact('escala', 'medicos', 'plantoes'));
    }

    public function update(Request $request, Escalas $escala)
    {
        $request->validate([
            'id_medico' => 'required|exists:medicos,id',
            'id_plantao' => 'required|exists:plantoes,id',
        ]);

        $escala->update($request->all());

        return redirect()->route('escalas.index')->with('success', 'Escala atualizada com sucesso!');
    }

    public function destroy(Escalas $escala)
    {
        $escala->delete();
        return redirect()->route('escalas.index')->with('success', 'Escala excluída com sucesso!');
    }
}
