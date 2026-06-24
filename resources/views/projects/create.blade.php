@extends('layouts.app')

@section('content')

    @if ($errors->any())

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

    @endif

    <h1>Создать проект</h1>

    <form method="POST" action="/projects">

        @csrf

        <p>
            <input type="text" name="title" placeholder="Название проекта" value="{{ old('title') }}">
            @error('title')
                <p>{{ $message }}</p>
            @enderror
        </p>

        <p>
            <input type="text" name="slug" placeholder="Slug" value="{{ old('slug') }}">
            @error('slug')
                <p>{{ $message }}</p>
            @enderror
        </p>

        <p>
            <textarea name="description" placeholder="Описание">{{ old('description') }}</textarea>
        </p>

        <button type="submit">
            Создать
        </button>

    </form>

@endsection