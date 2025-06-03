<x-layouts.app>
<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <div class="container">
    <h1>Detalhes dos Plantões</h1>

    <div class="card">
        <div class="card-section">
              <h2>Especialização:</h2>
              <p>{{ $plantao->especialiacao }}</p>
        </div>
    </div>

    <div class="card">
        <div class="card-section">
              <h2>Data de início:</h2>
              <p>{{ $plantoes->data_inicio ?? '-' }}</p>
        </div>
    </div>

    <div class="card">
        <div class="card-section">
              <h2>Data de término:</h2>
              <p>{{ $plantoes->data_fim ?? '--' }}</p>
        </div>
    </div>
  <div>

    <div>
      <a href="{{ route('plantoes.create') }}">Novo Plantão</a>
      <a href="{{ url()->previous() }}">Voltar</a>
    </div>
  </div>
</x-layouts.app>