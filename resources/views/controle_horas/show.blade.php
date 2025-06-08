<x-layouts.app :title="__('Detalhes da Entrada de Horas')">
  <head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>

  <div>
    <h1>Detalhes da Entrada de Horas</h1>

    <div class="card">
      <div class="card-section">
        <h2>Médico:</h2>
        <p>{{ $controle_hora->medico->nome }}</p>
      </div>
    </div>

    <div class="card">
      <div class="card-section">
        <h2>Plantão:</h2>
        <p>{{ $controle_hora->plantao->especializacao }}</p>
      </div>
    </div>

    <div class="card">
      <div class="card-section">
        <h2>Horas Trabalhadas:</h2>
        <p>{{ $controle_hora->horas_trabalhadas }}</p>
      </div>
    </div>

    <div>
      <a href="{{ route('controle_horas.edit', $controle_hora) }}" class="btn yellow">Editar</a>
      <a href="{{ route('controle_horas.index') }}" class="btn gray">Voltar</a>
    </div>
  </div>
</x-layouts.app>
