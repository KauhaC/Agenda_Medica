<x-layouts.app :title="__('Editar Entrada de Horas')">
  <head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>

  <div>
    <h1>Editar Entrada de Horas</h1>

    <form action="{{ route('controle_horas.update', $controle_hora) }}"  method="POST">
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
        <label for="horas">Horas Trabalhadas:</label>
        <div class="d-flex gap-2">
          @php
            $horas = explode(':', $controle_hora->horas_trabalhadas)[0] ?? '0';
            $minutos = explode(':', $controle_hora->horas_trabalhadas)[1] ?? '0';
          @endphp
          <input type="number" name="horas" id="horas" class="form-control" min="0" value="{{ $horas }}" placeholder="Horas" required>
          <input type="number" name="minutos" id="minutos" class="form-control" min="0" max="59" value="{{ $minutos }}" placeholder="Minutos" required>
        </div>
      </div>

      <div class="form-buttons">
        <button type="submit" class="btn atualizar" >Atualizar</button>
        <a href="{{ route('controle_horas.index') }}" class="btn gray">Cancelar</a>
      </div>

    </form>
  </div>
</x-layouts.app>
