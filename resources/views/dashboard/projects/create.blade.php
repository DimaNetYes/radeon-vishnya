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

    <form method="POST" action="/projects" enctype="multipart/form-data">

        @csrf
        //connect _form.blade
        @include('projects._form')

        <button type="submit">
            Создать
        </button>

    </form>

@endsection