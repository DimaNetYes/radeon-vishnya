@extends('layouts.app')

@section('content')

    <section class="max-w-5xl mx-auto pt-32 pb-20">

        @if($project->image)

            <img src="{{ asset('storage/' . $project->image) }}" class="w-full rounded-xl mb-10">

        @endif

        <h1 class="text-5xl font-bold text-white">

            {{ $project->title }}

        </h1>

        <div class="w-10 h-0.5 bg-red-600 rounded my-5"></div>

        <p class="text-gray-300 leading-8 text-lg">

            {{ $project->description }}

        </p>

        <!-- previous next Project -->
        <div class="flex justify-between mt-16">

            <div>

                @if($previous)

                    <a href="/projects/{{ $previous->slug }}" class="text-red-600">

                        ← {{ $previous->title }}

                    </a>

                @endif

            </div>

            <div>

                @if($next)

                    <a href="/projects/{{ $next->slug }}" class="text-red-600">

                        {{ $next->title }} →

                    </a>

                @endif

            </div>

        </div>

        <div class="mt-12">

            <a href="/projects"
                class="inline-flex items-center gap-2 border border-red-600 text-red-600 px-5 py-3 rounded-lg hover:bg-red-600 hover:text-white transition">

                ← Все проекты

            </a>

        </div>

    </section>

@endsection