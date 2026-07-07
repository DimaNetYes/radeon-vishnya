@extends('layouts.dashboard')

@section('content')

    <article class="max-w-5xl">

        @if($project->image)

            <img src="{{ asset('storage/' . $project->image) }}" class="w-full rounded-xl mb-8">

        @endif

        <h1 class="text-5xl font-bold">

            {{ $project->title }}

        </h1>

        <div class="w-10 h-0.5 bg-red-600 rounded my-5"></div>

        <p class="text-zinc-300 leading-8">

            {{ $project->description }}

        </p>

        <div class="mt-10 flex gap-4">

            <a href="/dashboard/projects/{{ $project->slug }}/edit" class="bg-blue-600 px-5 py-3 rounded-lg">

                ✏️ Редактировать

            </a>

            <a href="/dashboard/projects" class="bg-zinc-700 px-5 py-3 rounded-lg">

                ← Назад

            </a>

        </div>

    </article>

@endsection