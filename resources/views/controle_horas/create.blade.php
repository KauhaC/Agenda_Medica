<x-layouts.app :title="__('Nova Entrada de Horas')">
    <head>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

    <div>
        <h1>Nova Entrada de Horas</h1>
        <form method="POST" action="{{ route('controle_horas.store') }}">
            @csrf

            <div class="form-group">
                <label for="id_medico">Médico:</label>
                <select name="id_medico" id="id_medico" class="form-control" required>
                    @foreach($medicos as $medico)
                        <option value="{{ $medico->id }}">{{ $medico->nome }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="id_plantao">Plantão:</label>
                <select name="id_plantao" id="id_plantao" class="form-control" required>
                    @foreach($plantoes as $plantao)
                        <option value="{{ $plantao->id }}">{{ $plantao->especializacao }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="horas">Horas Trabalhadas:</label>
                <div class="d-flex gap-2">
                    <input type="number" name="horas" class="form-control" min="0" placeholder="Horas" required>
                    <input type="number" name="minutos" class="form-control" min="0" max="59" placeholder="Minutos" required>
                </div>
            </div>


            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="{{ route('controle_horas.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</x-layouts.app>
