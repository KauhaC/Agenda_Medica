<x-layouts.app :title="__('Meus Plantoes')">
  <div>
    <div>
      <h1>Meus Plantões</h1>
      <a href="{{ route('plantoes.create') }}">+ Novo Plantão</a>
    </div>

    @if($plantoes->isEmpty())
      <p>Nenhum plantão cadastrado.</p>
    @else
      <table border="1" cellpadding="8" cellspacing="0">
        <thead>
          <tr>
            <th>Especialização</th>
            <th>data_inicio</th>
            <th>data_fim</th>
          </tr>
        </thead>
        <tbody>
          @foreach($plantoes as $plantao)
            <tr>
              <td>{{ $plantao->especializacao }}</td>
              <td title="{{ $plantao->data_inicio }}">
                {{ ($plantao->data_inicio) }}
              </td>
              <td title="{{ $plantao->data_fim }}">
                {{ ($plantao->data_fim) }}
              </td>
              <td>
                <a href="{{ route('plantoes.show', $plantao) }}">Ver</a>
                |
                <a href="{{ route('plantoes.edit', $plantao) }}">Editar</a>
                |
                <form action="{{ route('plantoes.destroy', $plantao) }}" method="POST" style="display:inline" onsubmit="return confirm('Tem certeza que deseja excluir este plantão?')">
                  @csrf
                  @method('DELETE')
                  <button type="submit">Excluir</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    @endif
  </div>
</x-layouts.app>