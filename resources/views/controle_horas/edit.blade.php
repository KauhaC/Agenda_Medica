<x-layouts.app :title="__('Editar Entrada de Horas')">
  <head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>

  <div>
    <h1>Editar Entrada de Horas</h1>

    <form method="POST" action="{{ route('controle_horas.update', $controle_hora) }}">
      @csrf
      @method('PUT')

      <div class="form-group">
        <label for="id_medico">Médico:</label>
        <select name="id_medico" id="id_medico" class="form-control" required>
          @foreach($medicos as $medico)
            <option value="{{ $medico->id }}" {{ $controle_hora->id_medico == $medico->id ? 'selected' : '' }}>
              {{ $medico->nome }}
            </option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="id_plantao">Plantão:</label>
        <select name="id_plantao" id="id_plantao" class="form-control" required>
          @foreach($plantoes as $plantao)
            <option value="{{ $plantao->id }}" {{ $controle_hora->id_plantao == $plantao->id ? 'selected' : '' }}>
              {{ $plantao->especializacao }}
            </option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="horas_trabalhadas">Horas Trabalhadas:</label>
        <input type="time" name="horas_trabalhadas" class="form-control" value="{{ $controle_hora->horas_trabalhadas }}" required>
      </div>

      <button type="submit" class="btn btn-success">Atualizar</button>
      <a href="{{ route('controle_horas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
  </div>
</x-layouts.app>
