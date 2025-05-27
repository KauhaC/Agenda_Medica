<x-layouts.app :title="__('Editar Medico')" :dark-mode="auth()->user()->pref_dark_mode">
  <head>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
  <div>
    <h1>Editar Médico</h1>

    <form action="{{ route('medicos.update', $medico) }}" method="POST">
      @csrf
      @method('PUT')

      <div>
        <label for="nome">Nome</label><br>
        <input
          type="text"
          name="nome"
          id="nome"
          value="{{ old('nome', $medico->nome) }}"
          required
        >
      </div>

      <div style="margin-top:1em;">
        <label for="cpf">CPF</label><br>
        <textarea
          name="cpf"
          id="cpf"
          rows="1"
        >{{ old('cpf', $medico->cpf) }}</textarea>
      </div>

      <div style="margin-top:1em;">
        <label for="contato">Contato</label><br>
        <textarea
          name="contato"
          id="contato"
          rows="1"
        >{{ old('contato', $medico->contato) }}</textarea>
      </div>

      <div style="margin-top:1em;">
        <label for="especializacao">Especialização</label><br>
        <textarea
          name="especializacao"
          id="especializacao"
          rows="4"
        >{{ old('especializacao', $medico->especializacao) }}</textarea>
      </div>

      <div style="margin-top:1em;">
        <button type="button" class="atualizar">Salvar</button>
        <a href="{{ route('medicos.show', $medico) }}">Cancelar</a>
      </div>
    </form>
  </div>
</x-layouts.app>
