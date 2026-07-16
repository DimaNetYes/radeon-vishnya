@extends('layouts.app')




@section('content')

    <section class="min-h-[650px] md:min-h-[750px] pt-24 flex items-center bg-cover bg-center relative"
        style="background-image: url('{{ asset('images/hero/bg2.png') }}');">

        <!-- Div make the dark style for background. Its working like a section have class relative, then div, then next div have a relative class -->
        <div class="absolute inset-0 bg-black/30"></div>

        <div class="relative max-w-md mx-6 md:mx-12">

            <h1 class="text-4xl md:text-6xl font-bold text-red-100"> {{ $title }}</h1>

            <p class="mt-6 text-lg md:text-xl text-red-600">
                {{ __('messages.sec1_main_description') }}
            </p>

            <p class="mt-4 text-gray-400">
                {{ __('messages.sec1_main_description_down') }}
            </p>

            <div class="mt-8 flex flex-wrap gap-3 md:gap-4">

                <a href="/projects"
                    class="bg-red-600 text-white px-6 py-3 rounded-lg transition hover:bg-red-800 hover:text-white">
                    {{ __('messages.projects') }}
                </a>

                <a href="https://www.youtube.com/@radeonvischnya" target="_blank" rel="noopener noreferrer"
                    class="inline-flex items-center gap-2 border px-6 py-3 rounded-lg text-red-100 transition hover:bg-red-600 hover:text-white">
                    <svg class="w-4 h-4 fill-current" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <title>YouTube</title>
                        <path
                            d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />

                    </svg>
                    <span>YouTube</span>
                </a>

            </div>
        </div>

    </section>

    <section class="">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 md:gap-16 bg-orange-100">

            <div>

                <img src="{{ asset('images/about/AboutMe.png') }}" alt="Radeon Vishnya" class="w-full h-60 md:h-full object-cover">

            </div>

            <div class="order-2 px-6 md:px-0 py-2">

                <h2 class="font-bold text-3xl md:text-2xl mb-3"> {{ __('messages.sec2_who_am_i') }}</h2>
                <div class="w-10 h-0.5 bg-red-600 rounded mb-2"></div>


                <p>
                    {{ __('messages.sec2_name') }}
                </p>
                <p>{{ __('messages.sec2_description') }}
                </p>

            </div>

            <div class="order-3 space-y-5 px-6 md:px-0 pb-8 md:pb-0">

                <x-feature-card icon="💻" title="{{ __('messages.sec2_title_web') }}" description="{{ __('messages.sec2_title_desc_web') }} " />

                <x-feature-card icon="🎥" title="{{ __('messages.sec2_title_video') }}"
                    description="{{ __('messages.sec2_title_desc_video') }}" />

                <x-feature-card icon="⛵" title="{{ __('messages.sec2_title_games') }}"
                    description="{{ __('messages.sec2_title_desc_games') }}" />

            </div>

        </div>

    </section>






    <section class="py-8 px-6 md:px-10 projects bg-cover bg-center"
        style="background-image:url('{{ asset('images/backgrounds/bg2.png') }}')">

        <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-3 mb-8">

            <h2 class="text-3xl md:text-4xl font-bold text-red-100">
                {{ __('messages.sec3_my_project') }}
            </h2>
            <hr>

            <a href="/projects" class="text-red-600 font-semibold hover:text-red-700 transition">
                 {{ __('messages.sec3_all_projects') }}
            </a>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            @foreach($projects as $project)

                <x-project-card :project="$project" />

            @endforeach

        </div>

    </section>

    <section class="py-8 px-6 md:px-10 border-y border-gray-700 bg-cover bg-center"
        style="background-image:url('{{ asset('images/backgrounds/bg1.png') }}')">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 md:gap-16 md:divide-x divide-gray-700">

            <div>

                <h2 class="text-3xl md:text-4xl font-bold text-orange-100">
                     {{ __('messages.sec4_Logbook') }}
                </h2>

                <div class="w-10 h-0.5 bg-red-600 rounded my-4"></div>

                <div class="space-y-6">

                    @foreach($journals as $journal)

                        <x-journal-item :journal="$journal" />

                    @endforeach

                </div>

                <a href="/journal" class="inline-block mt-8 text-red-600 font-semibold hover:text-red-700 transition">
                    {{ __('messages.sec4_read_posts') }}
                </a>

            </div>

            <div class="pt-10 border-t border-white/100 md:pt-0 md:border-t-0 md:pl-5">

                <h2 class="text-3xl md:text-4xl font-bold text-orange-100">
                    YouTube
                </h2>

                <div class="w-10 h-0.5 bg-red-600 rounded my-4"></div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">

                    @foreach($videos as $video)

                        <x-youtube-item :video="$video" />

                    @endforeach

                </div>

                <a href="https://www.youtube.com/@radeonvischnya/videos" target="_blank" rel="noopener noreferrer"
                    class="inline-flex items-center justify-center gap-2 mt-8 w-full sm:w-auto border border-red-600 text-red-600 px-5 py-3 rounded-lg hover:bg-red-600 hover:text-white transition">
                    <svg class="w-4 h-4 fill-current" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <title>YouTube</title>
                        <path
                            d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />

                    </svg>
                    <span>{{ __('messages.sec5_Visit_channel') }}</span>
                </a>

            </div>

        </div>

    </section>


@endsection('content')