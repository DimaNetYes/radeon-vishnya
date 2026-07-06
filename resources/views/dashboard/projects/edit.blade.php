@extends('layouts.app')

@section('content')

    <h1>Редактирование проекта</h1>

    <form method="POST" action="/projects/{{ $project->slug }}" enctype="multipart/form-data">

        @csrf
        @method('PATCH')

        @include('projects._form')

        <button type="submit">
            Сохранить
        </button>

    </form>

@endsection