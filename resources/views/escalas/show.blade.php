<x-layouts.app :title="__('Detalhes da Escala')">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <div>
    <h1>Escala</h1>

    @if($escala->medico)
      <div class="card">
        <h2>Médico</h2>
        <p>{{ $escala->medico->nome }} ({{ $escala->medico->especializacao }})</p>
      </div>
    @endif

    <p><br></p>

    @if($escala->plantao)
      <div class="card">
        <h2>Plantão</h2>
        <p>Especialização: {{ $escala->plantao->especializacao }}</p>
        <p>Início: {{ \Carbon\Carbon::parse($escala->plantao->data_inicio)->format('d/m/Y H:i') }}</p>
        <p>Fim: {{ \Carbon\Carbon::parse($escala->plantao->data_fim)->format('d/m/Y H:i') }}</p>
      </div>
    @endif

    <p><br></p>
    <div class="form-buttons">
      <a href="{{ route('escalas.edit', $escala) }}" class="btn yellow">Editar</a>
      <a href="{{ route('escalas.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
  </div>
</x-layouts.app>
