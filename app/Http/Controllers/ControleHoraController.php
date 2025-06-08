<?php

namespace App\Http\Controllers;

use App\Models\ControleHoras;
use App\Models\Medicos;
use App\Models\Plantoes;
use Illuminate\Http\Request;

class ControleHoraController extends Controller
{
    public function index()
    {
        $horas = ControleHoras::with(['medico', 'plantao'])->get();
        return view('controle_horas.index', compact('horas'));
    }

    public function create()
    {
        $medicos = Medicos::all();
        $plantoes = Plantoes::all();
        return view('controle_horas.create', compact('medicos', 'plantoes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_medico' => 'required|exists:medicos,id',
            'id_plantao' => 'required|exists:plantoes,id',
            'horas_trabalhadas' => 'required',
        ]);

        ControleHoras::create($request->all());

        return redirect()->route('controle_horas.index')->with('success', 'Registro criado com sucesso!');
    }

    public function show(ControleHoras $controle_hora)
    {
        return view('controle_horas.show', compact('controle_hora'));
    }

    public function edit(ControleHoras $controle_hora)
    {
        $medicos = Medicos::all();
        $plantoes = Plantoes::all();
        return view('controle_horas.edit', compact('controle_hora', 'medicos', 'plantoes'));
    }

    public function update(Request $request, ControleHoras $controle_hora)
    {
        $request->validate([
            'id_medico' => 'required|exists:medicos,id',
            'id_plantao' => 'required|exists:plantoes,id',
            'horas_trabalhadas' => 'required',
        ]);

        $controle_hora->update($request->all());

        return redirect()->route('controle_horas.index')->with('success', 'Registro atualizado com sucesso!');
    }

    public function destroy(ControleHoras $controle_hora)
    {
        $controle_hora->delete();
        return redirect()->route('controle_horas.index')->with('success', 'Registro deletado com sucesso!');
    }
}
