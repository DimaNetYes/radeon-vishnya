<!DOCTYPE html>
<html>

<head>
    <title>Radeon Vishnya</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-800">

    <header class="bg-black text-white bg-opacity-25">
        <div class="max-w-7xl mx-auto flex justify-between items-center px-5 py-5">
            <div class="text-2xl font-bold">

                🍒 Radeon Vishnya

            </div>


            <nav class="flex gap-8">
                <a href="/">Главная</a>
                <a href="/projects">Проекты</a>
                <a href="/journal">Журнал</a>
                <a href="/youtube">Youtube</a>
                <a href="/about">Обо мне</a>
            </nav>




    </header>

    <main class="max-w-7xl mx-auto p-8">
        @yield('content')
    </main>

    <footer>
        Footer
    </footer>

</body>