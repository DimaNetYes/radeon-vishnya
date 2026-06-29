@extends('layouts.app')

@section('content')

    @if ($project->image)

        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" width="100">

    @endif

    <h1>{{ $project->title }}</h1>

    <p>{{ $project->description }}</p>

    <p>
        Slug: {{ $project->slug }}

        <a href="/projects/{{ $project->slug }}/edit">
            Редактировать
        </a>
    </p>

    <form method="POST" action="/projects/{{ $project->slug }}">

        @csrf

        @method('DELETE')

        <button type="submit">
            Удалить
        </button>

    </form>

@endsection