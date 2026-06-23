@extends('layouts.app')

@section('content')

<h1>Проекты</h1>

<ul>
    @foreach ($projects as $project)
        <li>
            <a href="/projects/{{ $project->slug }}">
                {{ $project->title }}
            </a>
        </li>
    @endforeach
</ul>

@endsection



