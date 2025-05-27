<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Plantoes;

class PlantaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plantoes = Plantoes::all();
        return view('plantoes.index', compact('plantoes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('plantoes.create');
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

        $plantao = Plantoes::create($data);

        return redirect()
            ->route('plantoes.show', $plantao)
            ->with('success', 'Plantão criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $plantao = Plantoes::findOrFail($id);
        return view('plantoes.show', ['plantao' => $plantao]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $plantao = Plantoes::findOrFail($id);
        return view('plantoes.edit', compact('plantao'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $plantao = Plantoes::findOrFail($id);
        $data = $request->validate([
            'nome'       => 'required|string|max:255',
            'cpf'        => 'required|string|max:11',
            'contato'    => 'nullable|string|max:11',
            'especializacao'  => 'required|string',
        ]);
        
        //if ($medico->created_by !== Auth::id()) {
        //    abort(403);
        //}

        $plantao->update($data);

        return redirect()
            ->route('plantoes.show', $medico)
            ->with('success', 'Plantões atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $plantao = Plantoes::findOrFail($id);
        
        //if ($medico->created_by !== Auth::id()) {
        //    abort(403);
        //}

        $plantao->delete();

        return redirect()
            ->route('plantoes.index')
            ->with('success', 'Plantão excluído com sucesso!');
    }
}
