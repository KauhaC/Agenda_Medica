<x-layouts.app :title="__('Meus Medicos')">
  <div>
    <div>
      <h1>Meus Médicos</h1>
      <a href="{{ route('medicos.create') }}">+ Novo Médico</a>
    </div>

    @if($medicos->isEmpty())
      <p>Nenhum médico cadastrado.</p>
    @else
      <table border="1" cellpadding="8" cellspacing="0">
        <thead>
          <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>Contato</th>
            <th>Especialização</th>
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
                <a href="{{ route('medicos.show', $medico) }}">Ver</a>
                |
                <a href="{{ route('medicos.edit', $medico) }}">Editar</a>
                |
                <form action="{{ route('medicos.destroy', $medico) }}" method="POST" style="display:inline" onsubmit="return confirm('Tem certeza que deseja excluir este médico?')">
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