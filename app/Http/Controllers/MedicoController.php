<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Medicos;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medicos = Medicos::all();
        return view('medicos.index', compact('medicos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('medicos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nome'       => 'required|string|max:255',
            'cpf'        => 'required|string|max:11',
            'contato'    => 'nullable|string|max:11',
            'especializacao'  => 'string'
        ]);

        // $data['created_by'] = Auth::id();

        $medico = Medicos::create($data);

        return redirect()
            ->route('medicos.show', $medico)
            ->with('success', 'Medico criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $medico = Medicos::findOrFail($id);
        return view('medicos.show', ['medico' => $medico]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $medico = Medicos::findOrFail($id);
        return view('medicos.edit', compact('medico'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $medico = Medicos::findOrFail($id);
        $data = $request->validate([
            'nome'       => 'required|string|max:255',
            'cpf'        => 'required|string|max:11',
            'contato'    => 'nullable|string|max:11',
            'especializacao'  => 'required|string',
        ]);
        
        if ($medico->created_by !== Auth::id()) {
            abort(403);
        }

        $medico->update($data);

        return redirect()
            ->route('medicos.show', $medico)
            ->with('success', 'Medicos atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $medico = Medicos::findOrFail($id);
        
        if ($medico->created_by !== Auth::id()) {
            abort(403);
        }

        $medico->delete();

        return redirect()
            ->route('medicos.index')
            ->with('success', 'Medico excluído com sucesso!');
    }
}
