<x-layouts.app :title="__('Meus Escalas')">
  <div>
    <div>
      <h1>Meus Escalas</h1>
      <a href="{{ route('escalas.create') }}">+ Nova Escala</a>
    </div>

    @if($escalas->isEmpty())
      <p>Nenhuma escala cadastrada.</p>
    @else
      <table class="table">
        <thead>
          <tr>
            <th>Especialização</th>
            <th>data_inicio</th>
            <th>data_fim</th>
          </tr>
        </thead>
        <tbody>
          @foreach($escalas as $escala)
            <tr>
              <td>{{ $escala->especializacao }}</td>
              <td title="{{ $plantao->data_inicio }}">
                {{ ($escala->data_inicio) }}
              </td>
              <td title="{{ $plantao->data_fim }}">
                {{ ($escala->data_fim) }}
              </td>
              <td>
                <a href="{{ route('escalas.show', $escala) }}" class="link blue">Ver</a>
                |
                <a href="{{ route('escalas.edit', $escala) }}" class="link yellow">Editar</a>
                |
                <form action="{{ route('escalas.destroy', $escala) }}" method="POST" style="display:inline" onsubmit="return confirm('Tem certeza que deseja excluir esta escala?')">
                  @csrf
                  @method('DELETE')
                  <button type="button" class="btn-excluir link red" id="btn-excluir" data-nome= "{{ $escala->nome }}" >Excluir</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    @endif
  </div>
</x-layouts.app>