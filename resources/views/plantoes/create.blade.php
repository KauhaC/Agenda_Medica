<x-layouts.app>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        </head>
    <div class="container">
        <h1>Novo Plantão</h1>
        <form action="{{route('plantoes.store')}}" method="POST">
        @csrf
            <div class="form-group">
                <label for="especializacao">Especialização: </label>
                <input type="text" name="especializacao" required>
            </div>
            <div class="form-group">
                <label for="data_inicio">Data de início:</label>
                <input type="datetime-local" name="data_inicio" required>
            </div>
            <div class="form-group">
                <label for="data_fim">Data de término:</label>
                <input type="datetime-local" name="data_fim" required>
            </div>

            <button type="submit" class="btn btn-success" >Salvar</button>
            <a href="{{ route('plantoes.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</x-layouts.app>
