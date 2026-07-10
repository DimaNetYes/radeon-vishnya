@extends('layouts.app')

@section('content')

    <section class="max-w-5xl mx-auto pt-32 pb-20">

        @if($project->image)

            <img src="{{ asset('storage/' . $project->image) }}" class="w-full rounded-xl mb-10">

        @endif

        <h1 class="text-5xl font-bold text-white">

            {{ $project->localized_title }}

        </h1>

        <div class="w-10 h-0.5 bg-red-600 rounded my-5"></div>

        <p class="text-gray-300 leading-8 text-lg">

            {{ $project->localized_description }}

        </p>
            <!-- Project anchor for apk, telegram, browser -->
        <div class="flex flex-wrap gap-4 mt-10">

            @if($project->telegram_url)
                <a href="{{ $project->telegram_url }}" target="_blank" rel="noopener noreferrer"
                    class="bg-sky-500 text-white px-5 py-3 rounded-lg">
                    🚀 Telegram
                </a>
            @endif

            @if($project->demo_url)
                <a href="{{ $project->demo_url }}" target="_blank" rel="noopener noreferrer"
                    class="bg-green-600 text-white px-5 py-3 rounded-lg">
                    🌍 Демо
                </a>
            @endif

            @if($project->github_url)
                <a href="{{ $project->github_url }}" target="_blank" rel="noopener noreferrer"
                    class="bg-zinc-800 text-white px-5 py-3 rounded-lg">
                    💻 GitHub
                </a>
            @endif
        
            @if($project->apk_url)
                <a href="{{ $project->apk_url }}" target="_blank" rel="noopener noreferrer"
                    class="bg-orange-600 text-white px-5 py-3 rounded-lg">
                    📱 APK
                </a>
            @endif
        </div>

        <!-- previous next Project -->
        <div class="flex justify-between mt-16">

            <div>

                @if($previous)

                    <a href="/projects/{{ $previous->slug }}" class="text-red-600">

                        ← {{ $previous->title }}

                    </a>

                @endif

            </div>

            <div>

                @if($next)

                    <a href="/projects/{{ $next->slug }}" class="text-red-600">

                        {{ $next->title }} →

                    </a>

                @endif

            </div>

        </div>

        <div class="mt-12">

            <a href="/projects"
                class="inline-flex items-center gap-2 border border-red-600 text-red-600 px-5 py-3 rounded-lg hover:bg-red-600 hover:text-white transition">

                {{ __('messages.All_project') }}

            </a>

        </div>

    </section>

@endsection