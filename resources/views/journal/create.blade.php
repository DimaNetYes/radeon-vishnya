@extends('layouts.app')

@section('content')

    <h1 class="text-4xl font-bold mb-8">
        Новая запись
    </h1>

    <form action="/journal" method="POST" enctype="multipart/form-data">

        @csrf

        @include('journal._form')

    </form>

@endsection