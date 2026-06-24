@extends('layouts.app')

@section('content')

    <h1>Редактирование проекта</h1>

    <form method="POST" action="/projects/{{ $project->slug }}">

        @csrf
        @method('PATCH')

        <p>
            <input type="text" name="title" value="{{ old('title', $project->title) }}">
        </p>

        <p>
            <input type="text" name="slug" value="{{ old('slug', $project->slug) }}">
        </p>

        <p>
            <textarea name="description">{{ old('description', $project->description) }}</textarea>
        </p>

        <button type="submit">
            Сохранить
        </button>

    </form>

@endsection