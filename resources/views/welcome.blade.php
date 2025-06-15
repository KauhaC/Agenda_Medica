<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plantão Fácil - Conectando Médicos e Hospitais</title>
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/a2e0a0d66b.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gradient-to-tr from-blue-100 via-white to-blue-50 text-gray-800 min-h-screen flex flex-col justify-between">

    <div class="flex flex-col items-center justify-center px-6 pt-10 text-center">
        
        <div class="mb-8">
            <h1 class="text-5xl font-extrabold text-blue-700 mb-4 drop-shadow">Plantão Fácil</h1>
            <p class="text-xl text-gray-700">Facilitando a conexão entre <strong>médicos</strong> e <strong>hospitais</strong> para uma gestão de plantões eficiente.</p>
        </div>


        <div class="mb-10">
            <img src="{{ asset('images/home.jpg') }}" alt="Hospital e Médico" class="w-40 md:w-75 rounded-xl shadow-xl border border-blue-200">
        </div>


        <div class="flex gap-6 flex-wrap justify-center mb-10">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="flex items-center gap-2 bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">
                        <i class="fas fa-chart-line"></i> Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="flex items-center gap-2 bg-green-500 text-white px-6 py-2 rounded-lg hover:bg-green-600 transition">
                        <i class="fas fa-sign-in-alt"></i> Entrar
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="flex items-center gap-2 bg-gray-200 text-gray-800 px-6 py-2 rounded-lg hover:bg-gray-300 transition">
                            <i class="fas fa-user-plus"></i> Registrar
                        </a>
                    @endif
                @endauth
            @endif
        </div>
    </div>


    <footer class="text-center text-sm text-gray-500 py-4">
        &copy; {{ date('Y') }} Plantão Fácil. Todos os direitos reservados.
    </footer>

</body>
</html>
