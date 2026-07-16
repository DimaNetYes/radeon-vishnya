@extends('layouts.app')

@section('content')

    <article class="max-w-5xl mx-auto px-5 md:px-0 pt-24 md:pt-28 pb-12">

        <!-- Breadcrumbs -->
        <a href="/journal" class="inline-flex items-center gap-2 text-gray-400 hover:text-red-500 transition md:ml-5">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
            <span>{{ __('messages.journal') }}</span>
        </a>

        <h1 class="max-w-5xl mx-auto pt-4 pb-2 font-bold text-white">

            {{ $journal->localized_title }}

        </h1>

        <p class="text-sm md:text-base text-zinc-500 mt-3">

            {{ $journal->published_at->translatedFormat('d F Y')  }}

        </p>

        @if($journal->image)

            <img src="{{ asset('storage/' . $journal->image) }}" class="w-full rounded-xl md:rounded-2xl shadow-xl mt-4 object-cover">

        @endif

        <div class="text-gray-300 text-base md:text-lg leading-4 md:leading-8 whitespace-pre-line">

            {{ $journal->localized_content }}

        </div>


        <!-- Previous and next article of journal -->
        <div class="flex flex-col md:flex-row justify-between gap-8 mt-10">

            <div>

                @if($previous)

                    <a href="/journal/{{ $previous->slug }}" class="text-red-600 hover:text-red-500">
                        <p>{{ __('messages.previous') }}</p>
                        {{ $previous->localized_title }}

                    </a>

                @endif

            </div>

            <div>

                @if($next)

                    <a href="/journal/{{ $next->slug }}" class="text-red-600 hover:text-red-500">
                        <p> {{ __('messages.next') }} </p>
                        {{ $next->localized_title }} 

                    </a>

                @endif

            </div>

        </div>

        <div class="mt-12">

            <a href="/journal"
                class="inline-flex justify-center items-center w-full sm:w-auto gap-2 border border-red-600 text-red-600 px-5 py-3 rounded-lg hover:bg-red-600 hover:text-white transition">

                {{ __('messages.view_all_posts') }}

            </a>

        </div>

    </article>

@endsection