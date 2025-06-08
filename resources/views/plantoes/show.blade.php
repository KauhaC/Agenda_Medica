<x-layouts.app>
<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <div class="container">
    <h1>Detalhes dos Plantões</h1>

    <div class="card">
        <div class="card-section">
              <h2>Especialização:</h2>
              <p>{{ $plantao->especializacao }}</p>
        </div>
    </div>

    <div class="card">
        <div class="card-section">
              <h2>Data de início:</h2>
              <p>{{ $plantao->data_inicio ?? '-' }}</p>
        </div>
    </div>

    <div class="card">
        <div class="card-section">
              <h2>Data de término:</h2>
              <p>{{ $plantao->data_fim ?? '--' }}</p>
        </div>
    </div>
  <div>

    <div>
      <a href="{{ route('plantoes.edit', $plantao) }}" class="btn yellow">Editar</a>
      <a href="{{ route('plantoes.index') }}" class="btn gray">Voltar</a>
    </div>
  </div>
</x-layouts.app>