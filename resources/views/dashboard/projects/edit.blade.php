@extends('layouts.dashboard')

@section('content')

    <h1 class="text-4xl font-bold mb-8">

        Редактировать проект

    </h1>

    <form action="/dashboard/projects/{{ $project->slug }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PATCH')

        @include('dashboard.projects._form')

    </form>

@endsection