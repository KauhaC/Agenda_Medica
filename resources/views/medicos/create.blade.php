<x-layouts.app>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Novo Médico</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <style>
            .form-group { margin-bottom: 1rem; }
            .form-group input { display: block; width: 100%; padding: 0.5rem; }
            .error { color: red; font-size: 0.875rem; margin-top: 0.25rem; }
        </style>
    </head>

    <div class="container py-4">
        <h1 class="mb-4">Novo Médico</h1>

        <form action="{{ route('medicos.store') }}" method="POST" novalidate>
            @csrf

            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" value="{{ old('nome') }}" required>
            </div>

            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" name="cpf" value="{{ old('cpf') }}" required pattern="\d{11}" minlength="11" maxlength="11" title="O CPF deve conter exatamente 11 números">
            </div>

            <div class="form-group">
                <label for="contato">Contato:</label>
                <input type="text" name="contato" value="{{ old('contato') }}" required pattern="\d{11}" minlength="11" maxlength="11" title="O telefone deve conter exatamente 11 números">
            </div>

            <div class="form-group">
                <label for="especializacao">Especialização:</label>
                <input type="text" name="especializacao" value="{{ old('especializacao') }}" required>
            </div>

            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="{{ route('medicos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</x-layouts.app>
