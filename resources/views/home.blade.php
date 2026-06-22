@extends('layouts.app')




@section('content')

    <h1> {{ $title }} </h1>
    <p> {{ $subtitle }} </p>
    <p> {{ $subsubtitle }} </p>

    <a href="/projects">Проекты</a>
    <a href="https://youtube.com">YouTube</a>

    
    
    
    
    
    <h2>Мои проекты</h2>

    <ul>
        @foreach ($projects as $project)
            <li>{{ $project }}</li>
        @endforeach
    </ul>


@endsection('content')