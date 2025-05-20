<x-layouts.app :title="__('Editar Escala')" :dark-mode="auth()->user()->pref_dark_mode">
  <div>
    <h1>Editar Escala</h1>

    <form action="{{ route('escalas.update', $escala) }}" method="POST">
      @csrf
      @method('PUT')

      <div>
        <label for="especializacao">Especialização</label><br>
        <input
          type="text"
          name="especializacao"
          id="especializacao"
          value="{{ old('especializacao', $escala->especializacao) }}"
          required
        >
      </div>

      <div style="margin-top:1em;">
        <label for="data_inicio">Data de início</label><br>
        <input 
          type="date"
          name="data_inicio"
          id="data_inicio"
          value="{{ old('data_inicio', $escala->data_inicio) }}">
      </div>

      <div style="margin-top:1em;">
        <label for="data_fim">Data de fim</label><br>
        <input
          name="data_fim"
          id="data_fim"
          value="{{ old('data_fim', $escala->data_fim) }}" >
      </div>

      <div style="margin-top:1em;">
        <button type="submit">Atualizar</button>
        <a href="{{ route('escalas.show', $escala) }}">Cancelar</a>
      </div>
    </form>
  </div>
</x-layouts.app>
