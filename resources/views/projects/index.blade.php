@extends('layouts.app')

@section('content')

    <section class="pt-24 pb-12 min-h-screen bg-cover bg-center"
        style="background-image:url('{{ asset('images/backgrounds/bg2.png') }}')">

        <!-- Breadcrumbs -->
        <a href="/" class="inline-flex items-center gap-2 text-gray-400 hover:text-red-500 transition md:ml-5 mb-5">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
            <span>{{ __('messages.back_home') }}</span>
        </a>

        <h1
            class="text-center text-3xl md:text-5xl font-extrabold mb-10 text-red-500 drop-shadow-2xl tracking-wide [text-shadow:2px_2px_8px_rgba(0,0,0,0.6)]">
            {{ __('messages.projects') }}</h1>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach ($projects as $project)
                <x-project-card :project="$project" />
            @endforeach
        </div>

    </section>

@endsection