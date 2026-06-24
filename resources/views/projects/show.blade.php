@extends('layouts.app')

@section('content')

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