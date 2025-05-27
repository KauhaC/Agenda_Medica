<x-layouts.app>
  <head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <div class="container">
    <h1>Detalhes dos Médicos</h1>

    <div class="card">
        <div class="card-section">
              <h2>Nome:</h2>
              <p>{{ $medico->nome }}</p>
        </div>
    </div>

    <div class="card">
        <div class="card-section">
              <h2>CPF:</h2>
              <p>{{ $medico->cpf ?? '-' }}</p>
        </div>
    </div>

    <div class="card">
        <div class="card-section">
              <h2>Contato:</h2>
              <p>{{ $medico->contato ?? '--' }}</p>
        </div>
    </div>


    <div class="card">
        <div class="card-section">
              <h2>Especialização:</h2>
              <p>{{ $medico->especializacao ?? '---' }}</p>
        </div>
    </div>


    <div>
      <a href="{{ route('medicos.edit', $medico) }}" class="btn yellow">Editar</a>
      <a href="{{ route('medicos.index') }}" class="btn gray">Voltar</a>
    </div>
  </div>
</x-layouts.app>