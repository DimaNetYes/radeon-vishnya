@extends('layouts.app')

@section('content')

    <section class="max-w-5xl mx-auto px-5 md:px-0 pt-24 md:pt-28 pb-20">

        <!-- Breadcrumbs -->
        <a href="/" class="inline-flex items-center gap-2 text-gray-400 hover:text-red-500 transition md:ml-5 mb-5">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
            <span>{{ __('messages.back_home') }}</span>
        </a>

        @if($project->image)

            <img src="{{ asset('storage/' . $project->image) }}" class="w-full rounded-xl md:rounded-2xl shadow-xl mb-8 md:mb-10 object-cover">

        @endif

        <h1 class="text-3xl md:text-5xl font-bold text-white">

            {{ $project->localized_title }}

        </h1>

        <div class="w-10 h-0.5 bg-red-600 rounded my-5"></div>

        <p class="text-gray-300 leading-7 md:leading-8 text-base md:text-lg">

            {{ $project->localized_description }}

        </p>
        <!-- Project anchor for apk, telegram, browser -->
        <div class="flex flex-wrap gap-4 mt-10">

            @if($project->telegram_url)
                <a href="{{ $project->telegram_url }}" target="_blank" rel="noopener noreferrer"
                    class="bg-sky-500 text-white px-5 py-3 rounded-lg w-full sm:w-auto">
                    🚀 Telegram
                </a>
            @endif

            @if($project->demo_url)
                <a href="{{ $project->demo_url }}" target="_blank" rel="noopener noreferrer"
                    class="bg-green-600 text-white px-5 py-3 rounded-lg w-full sm:w-auto">
                    🌍 Демо
                </a>
            @endif

            @if($project->github_url)
                <a href="{{ $project->github_url }}" target="_blank" rel="noopener noreferrer"
                    class="bg-zinc-800 text-white px-5 py-3 rounded-lg w-full sm:w-auto">
                    💻 GitHub
                </a>
            @endif

            @if($project->apk_url)
                <a href="{{ $project->apk_url }}" target="_blank" rel="noopener noreferrer"
                    class="bg-orange-600 text-white px-5 py-3 rounded-lg w-full sm:w-auto">
                    📱 APK
                </a>
            @endif
        </div>

        <!-- previous next Project -->
        <div class="flex justify-between mt-16">

            <div>

                @if($previous)

                    <a href="/projects/{{ $previous->slug }}" class="text-red-600 hover:text-red-500 transition">

                        ← {{ $previous->title }}

                    </a>

                @endif

            </div>

            <div>

                @if($next)

                    <a href="/projects/{{ $next->slug }}" class="text-red-600 hover:text-red-500 transition">

                        {{ $next->title }} →

                    </a>

                @endif

            </div>

        </div>

        <div class="mt-12">

            <a href="/projects"
                class="inline-flex justify-center items-center w-full sm:w-auto gap-2 border border-red-600 text-red-600 px-5 py-3 rounded-lg hover:bg-red-600 hover:text-white transition">

                {{ __('messages.All_project') }}

            </a>

        </div>

    </section>

@endsection