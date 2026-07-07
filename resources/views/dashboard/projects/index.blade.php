@extends('layouts.dashboard')

@section('content')

<div class="flex justify-between items-center mb-8">

    <h1 class="text-4xl font-bold">
        Проекты
    </h1>

    <a href="/dashboard/projects/create"
        class="bg-red-600 px-5 py-3 rounded-lg hover:bg-red-700 transition">

        + Новый проект

    </a>

</div>

@foreach($projects as $project)

    <div class="bg-zinc-800 rounded-xl p-6 mb-6">

        @if($project->image)

            <img
                src="{{ asset('storage/'.$project->image) }}"
                class="w-full h-56 object-cover rounded-lg mb-4">

        @endif

        <h2 class="text-2xl font-bold">

            {{ $project->title }}

        </h2>

        <p class="text-zinc-400 mt-3">

            {{ $project->description }}

        </p>

        <div class="mt-5 flex gap-5">

            <a href="/dashboard/projects/{{ $project->slug }}">
                👁 Просмотр
            </a>

            <a href="/dashboard/projects/{{ $project->slug }}/edit">
                ✏️ Редактировать
            </a>

            <form
                action="/dashboard/projects/{{ $project->slug }}"
                method="POST">

                @csrf
                @method('DELETE')

                <button
                    onclick="return confirm('Удалить проект?')">

                    🗑 Удалить

                </button>

            </form>

        </div>

    </div>

@endforeach

@endsection