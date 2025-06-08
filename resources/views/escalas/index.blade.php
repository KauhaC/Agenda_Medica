<x-layouts.app :title="__('Escalas')">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <div>
    <h1>Escalas</h1>

    <a href="{{ route('escalas.create') }}" class="btn btn-primary">Nova Escala</a>

    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($escalas->isEmpty())
      <p>Nenhuma escala cadastrada.</p>
    @else
      <table class="table">
        <thead>
          <tr>
            <th>Médico</th>
            <th>Especialização</th>
            <th>Data Início</th>
            <th>Data Fim</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          @foreach($escalas as $escala)
            <tr>
              <td>{{ $escala->medico->nome }}</td>
              <td>{{ $escala->plantao->especializacao }}</td>
              <td>{{ \Carbon\Carbon::parse($escala->plantao->data_inicio)->format('d/m/Y H:i') }}</td>
              <td>{{ \Carbon\Carbon::parse($escala->plantao->data_fim)->format('d/m/Y H:i') }}</td>
              <td>
                <a href="{{ route('escalas.show', $escala) }}" class="link blue">Ver</a>
                <a href="{{ route('escalas.edit', $escala) }}" class="link yellow">Editar</a>
                <form action="{{ route('escalas.destroy', $escala) }}" method="POST" class="d-inline" onsubmit="return confirm('Tem certeza que deseja excluir essa escala?')">
                  @csrf
                  @method('DELETE')
                  <button type="button" class="btn-excluir link red" id="btn-excluir">Excluir</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    @endif
  </div>
</x-layouts.app>
