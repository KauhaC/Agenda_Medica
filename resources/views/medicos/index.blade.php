<x-layouts.app :title="__('Meus Medicos')">
  <head>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
  <div>
    <div>
      <h1>Meus Médicos</h1>
      <a href="{{ route('medicos.create') }}" class="link green">+ Novo Médico</a>
    </div>

    @if($medicos->isEmpty())
      <p>Nenhum médico cadastrado.</p>
    @else
      <table class="table">
        <thead>
          <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>Contato</th>
            <th>Especialização</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          @foreach($medicos as $medico)
            <tr>
              <td>{{ $medico->nome }}</td>
              <td title="{{ $medico->cpf}}">
                {{ ($medico->cpf) }}
              </td>
              <td title="{{ $medico->contato}}">
                {{ ($medico->contato) }}
              </td>
              <td title="{{ $medico->especializacao }}">
                {{ ($medico->especializacao) }}
              </td>
              <td>
                <a href="{{ route('medicos.show', $medico) }}" class="link blue">Ver</a>
                |
                <a href="{{ route('medicos.edit', $medico) }}" class="link yellow">Editar</a>
                |
                <form action="{{ route('medicos.destroy', $medico) }}" method="POST" style="display:inline" onsubmit="return confirm('Tem certeza que deseja excluir este médico?')">
                  @csrf
                  @method('DELETE')
                  <button type="button" class="btn-excluir link red" id="btn-excluir" data-nome= "{{ $medico->nome }}" >Excluir</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    @endif
  </div>
</x-layouts.app>