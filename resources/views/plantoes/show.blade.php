<x-layouts.app>
  <div>
    <h1>{{ $plantao->especializacao }}</h1>

    @if($plantao->especializacao)
      <p>{{ $plantao->especializacao }}</p>
    @endif

    @if($plantao->data_inicio)
      <p>{{ $plantao->data_inicio }}</p>
    @endif

    @if($plantao->data_fim)
      <p>{{ $plantao->data_fim }}</p>
    @endif

    <div>
      <a href="{{ route('plantoes.create') }}">Novo Plantão</a>
      <a href="{{ url()->previous() }}">Voltar</a>
    </div>
  </div>
</x-layouts.app>