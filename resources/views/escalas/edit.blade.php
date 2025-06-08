<x-layouts.app :title="__('Editar Escala')">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <div>
    <h1>Editar Escala</h1>

    <form action="{{ route('escalas.update', $escala) }}" method="POST">
      @csrf
      @method('PUT')

      <div class="form-group">
        <label for="id_medico">Médico</label>
        <select name="id_medico" id="id_medico" required>
          @foreach ($medicos as $medico)
            <option value="{{ $medico->id }}" {{ $escala->id_medico == $medico->id ? 'selected' : '' }}>
              {{ $medico->nome }} - {{ $medico->especializacao }}
            </option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="id_plantao">Plantão</label>
        <select name="id_plantao" id="id_plantao" required>
          @foreach ($plantoes as $plantao)
            <option value="{{ $plantao->id }}" {{ $escala->id_plantao == $plantao->id ? 'selected' : '' }}>
              {{ $plantao->especializacao }} - 
              {{ \Carbon\Carbon::parse($plantao->data_inicio)->format('d/m/Y H:i') }} até 
              {{ \Carbon\Carbon::parse($plantao->data_fim)->format('d/m/Y H:i') }}
            </option>
          @endforeach
        </select>
      </div>

      <div class="form-buttons">
        <button type="button" class="btn atualizar" id="atualizar">Atualizar</button>
        <a href="{{ route('escalas.index') }}" class="btn gray">Cancelar</a>
      </div>
    </form>
  </div>
</x-layouts.app>
