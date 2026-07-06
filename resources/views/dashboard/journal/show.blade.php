@extends('layouts.dashboard')

@section('content')

    <article class="max-w-5xl">

        <h1 class="text-5xl font-bold mb-3">

            {{ $journal->title }}

        </h1>

        <p class="text-zinc-500 mb-8">

            {{ $journal->published_at }}

        </p>

        @if($journal->image)

            <img src="{{ asset('storage/' . $journal->image) }}" class="w-full rounded-xl mb-8">

        @endif

        <p class="text-zinc-400 mt-2">
           Краткое описание: {{ $journal->excerpt }}
           <br/><br/>
        </p>

        <div class="prose prose-invert max-w-none">

            {!! nl2br(e($journal->content)) !!}

        </div>

        <div class="mt-10 flex gap-4">

            <a href="/dashboard/journal/{{ $journal->slug }}/edit" class="bg-blue-600 px-5 py-3 rounded-lg">

                ✏️ Редактировать

            </a>

            <a href="/dashboard/journal" class="bg-zinc-700 px-5 py-3 rounded-lg">

                ← Назад

            </a>

        </div>

    </article>

@endsection