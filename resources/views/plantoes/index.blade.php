<x-layouts.app :title="__('Meus Plantoes')">
<head>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
  <div>
    <div>
      <h1>Meus Plantões</h1>
      <a href="{{ route('plantoes.create') }}" class="btn btn-primary">Novo Plantão</a>

      @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
      @endif
    </div>

    @if($plantoes->isEmpty())
      <p>Nenhum plantão cadastrado.</p>
    @else
      <table class="table">
        <thead>
          <tr>
            <th>Especialização</th>
            <th>data_inicio</th>
            <th>data_fim</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          @foreach($plantoes as $plantao)
            <tr>
              
              <td title="{{ $plantao->especializacao }}">
                {{ ($plantao->especializacao) }}
              </td>
              <td title="{{ $plantao->data_inicio }}">
                {{ $plantao->data_inicio->format('d/m/Y') }}
              </td>
              <td title="{{ $plantao->data_fim }}">
                {{ $plantao->data_fim->format('d/m/Y') }}
              </td>

              <td>
                <a href="{{ route('plantoes.show', $plantao) }}" class="link blue">Ver</a>
                |
                <a href="{{ route('plantoes.edit', $plantao) }}" class="link yellow">Editar</a>
                |
                <form action="{{ route('plantoes.destroy', $plantao) }}" method="POST" style="display:inline" onsubmit="return confirm('Tem certeza que deseja excluir este plantão?')">
                  @csrf
                  @method('DELETE')
                  <button type="button" class="btn-excluir link red" id="btn-excluir" data-nome= "{{ $plantao->especializacao }}" >Excluir</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    @endif
  </div>
</x-layouts.app>