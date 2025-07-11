<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Studio Vitali')</title>

    <!-- Tailwind CDN para facilitar -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        /* Exemplo de personalização */
        body {
            background: linear-gradient(135deg, #a3cef1 0%, #4484ce 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col justify-center items-center">

    <header class="mb-12 text-center text-white">
        <h1 class="text-5xl font-bold tracking-wide">Studio Vitali Pilates</h1>
        <p class="mt-2 text-lg font-light">Qualidade, saúde e bem-estar para transformar sua vida</p>
    </header>

    <main class="w-full max-w-md bg-white rounded-lg shadow-lg p-8">
        @yield('content')
    </main>

    <footer class="mt-12 text-white text-sm">
        &copy; {{ date('Y') }} Studio Vitali. Todos os direitos reservados.
    </footer>

</body>
</html>
