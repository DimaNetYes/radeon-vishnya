<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-zinc-900 text-white">

    <div class="flex min-h-screen">

        <aside class="w-64 bg-black p-6">

            <h1 class="text-2xl font-bold mb-8">
                🍒 Dashboard
            </h1>

            <nav class="space-y-4">

                <a href="/dashboard" class="block hover:text-red-500">
                    Главная
                </a>

                <a href="/dashboard/projects" class="block hover:text-red-500">
                    Проекты
                </a>

                <a href="/dashboard/journal" class="block hover:text-red-500">
                    Журнал
                </a>

            </nav>

            <div class="mt-12 border-t border-zinc-700 pt-6">

                <a href="/" class="block mb-4 hover:text-red-500">

                    🌍 На сайт

                </a>

                <form method="POST" action="{{ route('logout') }}">

                    @csrf

                    <button class="hover:text-red-500">

                        🚪 Выйти

                    </button>

                </form>

            </div>

        </aside>

        <main class="flex-1 p-10">
            @yield('content')
        </main>

    </div>

</body>

</html>