<x-layouts.app :title="__('Controle de Horas')">
    <head>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

    <div>
        <h1>Controle de Horas</h1>
        <a href="{{ route('controle_horas.create') }}" class="link green">+ Nova Entrada</a>

        @if($horas->isEmpty())
            <p>Nenhuma entrada registrada.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Médico</th>
                        <th>Plantão</th>
                        <th>Horas Trabalhadas por Especialização</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($horas as $hora) 
                        <tr>
                            <td>{{ $hora->medico->nome }}</td>
                            <td>{{ $hora->plantao->especializacao }}</td>
                            <td>{{ $hora->horas_trabalhadas }}</td>
                            <td>
                                <a href="{{ route('controle_horas.show', $hora) }}" class="link blue">Ver</a>
                                |
                                <a href="{{ route('controle_horas.edit', $hora) }}" class="link yellow">Editar</a>
                                |
                                <form action="{{ route('controle_horas.destroy', $hora) }}" method="POST" style="display:inline" onsubmit="return confirm('Tem certeza que deseja excluir esta entrada?')">
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
