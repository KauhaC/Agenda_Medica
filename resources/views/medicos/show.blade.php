<x-layouts.app>
  <div>
    <h1>{{ $medico->nome }}</h1>

    @if($medico->nome)
      <p>{{ $medico->nome }}</p>
    @endif

    @if($medico->cpf)
      <p>{{ $medico->cpf }}</p>
    @endif

    @if($medico->contato)
      <p>{{ $medico->contato }}</p>
    @endif

    @if($medico->especializacao)
      <p>{{ $medico->especializacao }}</p>
    @endif

    <div>
      <a href="{{ route('medicos.create') }}">Novo Médico</a>
      <a href="{{ url()->previous() }}">Voltar</a>
    </div>
  </div>
</x-layouts.app>