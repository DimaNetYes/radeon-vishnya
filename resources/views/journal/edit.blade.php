@extends('layouts.app')

@section('content')

    <h1 class="text-4xl font-bold mb-8">
        Редактировать запись
    </h1>

    <form action="/journal/{{ $journal->slug }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PATCH')

        @include('journal._form')

    </form>

@endsection