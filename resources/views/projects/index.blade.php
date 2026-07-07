@extends('layouts.app')

@section('content')

    <section class="pt-32 pb-12 min-h-screen bg-cover bg-center" style="background-image:url('{{ asset('images/backgrounds/bg2.png') }}')">

        <h1 class="text-center text-5xl font-extrabold mb-10 text-red-500 drop-shadow-2xl tracking-wide [text-shadow:2px_2px_8px_rgba(0,0,0,0.6)]">Проекты</h1>

        <div class="grid grid-cols-3 gap-8">
            @foreach ($projects as $project)
                <x-project-card :project="$project" />
            @endforeach
        </div>

    </section>

@endsection