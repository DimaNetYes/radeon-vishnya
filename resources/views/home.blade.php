@extends('layouts.app')




@section('content')

    <section class="min-h-[700px] flex items-center bg-cover bg-center relative"
        style="background-image: url('{{ asset('images/hero/bg2.png') }}');">

        <!-- Div make the dark style for background. Its working like a section have class relative, then div, then next div have a relative class -->
        <div class="absolute inset-0 bg-black/30"></div>

        <div class="max-w-md mx-12 relative">

            <h1 class="text-6xl font-bold text-red-100"> {{ $title }}</h1>

            <p class="mt-6 text-xl text-red-600">
                {{ $subtitle}}
            </p>

            <p class="mt-4 text-gray-400">
                {{ $subsubtitle }}
            </p>

            <div class="mt-10 flex gap-4">

                <a href="/projects" class="bg-red-600 text-white px-6 py-3 rounded-lg">
                    Проекты
                </a>

                <a href="https://youtube.com" class="border px-6 py-3 rounded-lg text-red-100">
                    ▶️ YouTube
                </a>

            </div>
        </div>

    </section>

    <section class="">

        <div class="grid grid-cols-3 gap-16 bg-orange-100">

            <div>

                <img src="{{ asset('images/about/AboutMe.png') }}" alt="Radeon Vishnya" class="w-full h-full object-cover">

            </div>

            <div class="py-2">

                <h2 class="font-bold mb-2 text-2xl mt-2">Кто я?</h2>
                <div class="w-10 h-0.5 bg-red-600 rounded mb-2"></div>


                <p>
                    Меня зовут Radeon Вишня.
                </p>
                <p>Я живу в Германии, работаю, создаю небольшие приложения и мечтаю однажды сделать свою игру.
                    Этот сайт — мой цифровой гараж, где я собираю всё, что создаю своими руками.
                </p>

            </div>

            <div class="space-y-4 pt-2">

                <x-feature-card icon="💻" title="Веб-разработка" description="Создаю сайты и полезные штуки. " />

                <x-feature-card icon="🎥" title="Видеопроизводство"
                    description="Люблю монтаж, съёмку и современные AI-инструменты." />

                <x-feature-card icon="⛵" title="Игры"
                    description="Эксперементирую, учусь и делаю свои игры шаг за шагом." />

            </div>

        </div>

    </section>






    <section class="py-4 px-10 projects">

        <div class="flex justify-between items-center mb-5">

            <h2 class="text-4xl font-bold text-red-100">
                Мои проекты
            </h2>
            <hr>

            <a href="/projects" class="text-red-600 font-semibold hover:text-red-700 transition">
                Смотреть все проекты →
            </a>

        </div>

        <div class="grid grid-cols-3 gap-8">

            @foreach($projects as $project)

                <x-project-card :project="$project" />

            @endforeach

        </div>

    </section>

    <section class="py-8 px-10">

        <div class="grid grid-cols-2 gap-16">

            <div>

                <h2 class="text-4xl font-bold text-orange-100">
                    Бортовой журнал
                </h2>

                <div class="w-10 h-0.5 bg-red-600 rounded my-4"></div>

                <div class="space-y-6">

                    <x-journal-item />

                    <x-journal-item />

                    <x-journal-item />

                </div>

                <a href="/journal" class="inline-block mt-8 text-red-600 font-semibold hover:text-red-700 transition">
                    Читать все записи →
                </a>

            </div>

            <div>

                <h2 class="text-4xl font-bold text-orange-100">
                    YouTube
                </h2>

                <div class="w-10 h-0.5 bg-red-600 rounded my-4"></div>

                <div class="grid grid-cols-3 gap-4">

                    <x-youtube-item />

                    <x-youtube-item />

                    <x-youtube-item />

                </div>

                <a href="https://youtube.com"
                    class="inline-block mt-8 border border-red-600 text-red-600 px-5 py-2 rounded-lg hover:bg-red-600 hover:text-white transition">
                    ▶ Перейти на канал
                </a>

            </div>

        </div>

    </section>


@endsection('content')