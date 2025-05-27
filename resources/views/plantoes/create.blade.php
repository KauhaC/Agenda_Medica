<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <h1>Novo Plantão</h1>
        <form action="{{route('plantoes.create')}}">
        @csrf
        <div class="form-group">
            <label for="especializacao">Especialização: </label>
            <input type="text" name="especializacao">
        </div>
        <div class="form-group">
            <label for="data_inicio">Data de início:</label>
            <input type="date" name="data_inicio">
        </div>
        <div class="form-group">
            <label for="data_fim">Data de término:</label>
            <input type="date" name="data_fim">
        </div>

        <button type="submit" class="btn btn-success" >Salvar</button>
        <a href="{{ route('plantoes.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
