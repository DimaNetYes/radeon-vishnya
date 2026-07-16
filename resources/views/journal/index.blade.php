@extends('layouts.app')

@section('content')

    <section class="pt-24 pb-12 min-h-screen bg-cover bg-center"
        style="background-image:url('{{ asset('images/backgrounds/bg1.png') }}')">

        <!-- Breadcrumbs -->
        <a href="/" class="inline-flex items-center gap-2 text-gray-400 hover:text-red-500 transition md:ml-5 mb-5">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
            <span>{{ __('messages.back_home') }}</span>
        </a>

        <h1 class="text-5xl font-bold text-white mb-10 text-center">

            {{ __('messages.sec4_Logbook') }}

        </h1>

        <div class="space-y-6">

            @foreach($journals as $journal)

                <x-journal-item :journal="$journal" />

            @endforeach

        </div>

    </section>

@endsection