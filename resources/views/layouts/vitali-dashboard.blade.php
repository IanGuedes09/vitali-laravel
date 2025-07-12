<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Studio Vitali Dashboard')</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#4484ce',
                        secondary: '#a3cef1',
                        dark: '#1e3a5f',
                    }
                },
                fontFamily: {
                    sans: ['Segoe UI', 'Tahoma', 'Geneva', 'Verdana', 'sans-serif'],
                }
            },
            darkMode: 'class'
        }
    </script>

    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>

<body class="bg-gradient-to-br from-secondary to-primary text-gray-800 dark:text-gray-100 dark:from-gray-800 dark:to-gray-900 min-h-screen" x-data="{ sidebarOpen: false, darkMode: false }" x-init="darkMode = localStorage.getItem('theme') === 'dark'">

    <!-- Header -->
    <header class="bg-dark text-white px-6 py-4 shadow-md flex justify-between items-center fixed w-full z-50">
        <div class="flex items-center space-x-4">
            <button @click="sidebarOpen = !sidebarOpen" class="md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <h1 class="text-xl font-bold tracking-wide">Studio Vitali Pilates</h1>
        </div>

        <div class="flex items-center space-x-4">
            <button @click="darkMode = !darkMode; localStorage.setItem('theme', darkMode ? 'dark' : 'light'); document.documentElement.classList.toggle('dark')"
                class="text-white hover:text-yellow-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M10 2a.75.75 0 01.75.75v1a.75.75 0 01-1.5 0v-1A.75.75 0 0110 2zM4.22 4.22a.75.75 0 011.06 0l.7.7a.75.75 0 11-1.06 1.06l-.7-.7a.75.75 0 010-1.06zM2 10a.75.75 0 01.75-.75h1a.75.75 0 010 1.5h-1A.75.75 0 012 10zm8 6a.75.75 0 01.75.75v1a.75.75 0 01-1.5 0v-1A.75.75 0 0110 16zm7.03-6.75a.75.75 0 100 1.5h1a.75.75 0 100-1.5h-1zm-2.81 5.53a.75.75 0 010 1.06l-.7.7a.75.75 0 11-1.06-1.06l.7-.7a.75.75 0 011.06 0zM15.78 4.22a.75.75 0 00-1.06 0l-.7.7a.75.75 0 001.06 1.06l.7-.7a.75.75 0 000-1.06zM10 5a5 5 0 100 10A5 5 0 0010 5z" />
                </svg>
            </button>
            <span class="text-sm font-light">{{ auth()->user()->name }} ({{ auth()->user()->perfil }})</span>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="bg-red-600 hover:bg-red-700 transition px-4 py-2 rounded text-white font-semibold text-sm">Sair</button>
            </form>
        </div>
    </header>

    <div class="flex">
    <!-- Sidebar (agora fixada no topo junto ao header) -->
    <aside class="bg-dark w-64 min-h-screen pt-20 p-6 text-white shadow-lg fixed top-0 left-0 z-40">
        <nav>
            <ul class="space-y-3">
                <li>
                    <a href="{{ route('dashboard') }}"
                        class="block py-2 px-4 rounded-lg hover:bg-blue-600 transition {{ request()->routeIs('dashboard') ? 'bg-blue-600' : '' }}">
                        🏠 Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ route('vitali.index') }}"
                        class="block py-2 px-4 rounded-lg hover:bg-blue-600 transition {{ request()->routeIs('vitali.vitali.*') ? 'bg-blue-600' : '' }}">
                        📁 Módulo Vitali
                    </a>
                </li>
            </ul>
        </nav>
    </aside>

    <!-- Conteúdo principal deslocado para o lado da sidebar -->
    <main class="ml-64 flex-1 bg-white rounded-tl-3xl p-8 shadow-lg overflow-auto mt-20">
        @yield('content')
    </main>
</div>

    <!-- Alpine.js para interatividade -->
    <script src="https://unpkg.com/alpinejs" defer></script>
</body>

</html>
