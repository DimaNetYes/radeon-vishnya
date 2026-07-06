@extends('layouts.app')

@section('content')

    <h1 class="text-4xl font-bold mb-8">Проекты</h1>

    <div class="grid grid-cols-3 gap-8">
        @foreach ($projects as $project)
            <x-project-card :project="$project" />
        @endforeach
    </div>

@endsection