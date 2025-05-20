<x-layouts.app>
  <div>
    <h1>{{ $escala->especializacao }}</h1>

    @if($escala->especializacao)
      <p>{{ $escala->especializacao }}</p>
    @endif

    @if($escala->data_inicio)
      <p>{{ $escala->data_inicio }}</p>
    @endif

    @if($escala->data_fim)
      <p>{{ $escala->data_fim }}</p>
    @endif

    <div>
      <a href="{{ route('escalas.create') }}">Nova Escala</a>
      <a href="{{ url()->previous() }}">Voltar</a>
    </div>
  </div>
</x-layouts.app>