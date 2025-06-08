<x-layouts.app :title="__('Nova Escala')">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <div>
    <h1>Nova Escala</h1>

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('escalas.store') }}" method="POST">
      @csrf

      <div class="form-group">
        <label for="medico_id">Médico</label>
        <select name="medico_id" id="medico_id" required>
          <option value="">Selecione um médico</option>
          @foreach($medicos as $medico)
            <option value="{{ $medico->id }}" {{ old('medico_id') == $medico->id ? 'selected' : '' }}>
              {{ $medico->nome }} - {{ $medico->especializacao ?? '' }}
            </option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="plantao_id">Plantão</label>
        <select name="plantao_id" id="plantao_id" required>
          <option value="">Selecione um plantão</option>
          @foreach($plantoes as $plantao)
            <option value="{{ $plantao->id }}" {{ old('plantao_id') == $plantao->id ? 'selected' : '' }}>
              {{ $plantao->especializacao }} - 
              {{ \Carbon\Carbon::parse($plantao->data_inicio)->format('d/m/Y H:i') }} até 
              {{ \Carbon\Carbon::parse($plantao->data_fim)->format('d/m/Y H:i') }}
            </option>
          @endforeach
        </select>
      </div>

      <div class="form-buttons">
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('escalas.index') }}" class="btn btn-secondary">Cancelar</a>
      </div>
    </form>
  </div>
</x-layouts.app>
