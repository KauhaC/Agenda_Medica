<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <h1>Novo Médico</h1>
        <form action="{{route('medicos.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome: </label>
            <input type="text" name="nome">
        </div>
        <div class="form-group">
            <label for="cpf">CPF:</label>
            <input type="text" name="cpf">
        </div>
        <div class="form-group">
            <label for="contato">Contato:</label>
            <input type="text" name="contato">
        </div>
        <div class="form-group">
            <label for="especializacao">Especialização:</label>
            <input type="text" name="especializacao" id="especializacao" required>
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('medicos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
