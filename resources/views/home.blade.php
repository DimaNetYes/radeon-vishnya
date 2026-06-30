@extends('layouts.app')




@section('content')

    <section class="min-h-[700px] flex items-center bg-cover bg-center relative"
        style="background-image: url('{{ asset('images/hero/bg2.png') }}');">

<!-- Div make the dark style for background. Its working like a section have class relative, then div, then next div have a relative class -->
        <div class="absolute inset-0 bg-black/30"></div> 

            <div class="max-w-md mx-10 relative">

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






    <h2 class="text-4xl font-bold mb-8">Мои проекты</h2>

    <div class="grid grid-cols-3 gap-8">
        @foreach ($projects as $project)
            <x-project-card :project="$project" />
        @endforeach
    </div>


@endsection('content')