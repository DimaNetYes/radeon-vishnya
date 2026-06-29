@extends('layouts.app')




@section('content')

    <section class="min-h-[700px] flex items-center">

        <div class="max-w-md">

            <h1 class="text-6xl font-bold"> {{ $title }}</h1>

            <p  class="mt-6 text-xl text-red-600">
                {{ $subtitle}}
            </p>

            <p class="mt-4 text-gray-400">
                 {{ $subsubtitle }}
            </p>

            <div  class="mt-10 flex gap-4">

               <a
                href="/projects"
                class="bg-red-600 text-white px-6 py-3 rounded-lg"
            >
                Проекты
            </a>

            <a
                href="https://youtube.com"
                class="border px-6 py-3 rounded-lg"
            >
                YouTube
            </a>

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