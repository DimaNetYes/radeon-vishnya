@extends('layouts.dashboard')

@section('content')

    <div class="flex justify-between items-center mb-8">

        <h1 class="text-4xl font-bold">
            Бортовой журнал
        </h1>

        <a href="/dashboard/journal/create" class="bg-red-600 px-5 py-3 rounded-lg hover:bg-red-700 transition">

            + Новая запись

        </a>

    </div>

    <p class="text-zinc-400">

        @foreach($journals as $journal)

            <div class="bg-zinc-800 rounded-lg p-6 mb-4">
                @if($journal->image)

                    <img src="{{ asset('storage/' . $journal->image) }}" class="w-20 h-20 object-cover rounded-lg mb-4">

                @endif

                <h2 class="text-2xl font-bold">
                    {{ $journal->title }}
                </h2>

                <p class="text-zinc-400 mt-2">
                    {{ $journal->excerpt }}
                </p>

                <a href="/dashboard/journal/{{ $journal->slug }}" class="text-green-500 hover:text-green-400">

                    👁 Просмотр

                </a>

                <a href="/dashboard/journal/{{ $journal->slug }}/edit" class="inline-block mt-4 text-blue-400 hover:text-blue-300">

                    ✏️ Редактировать

                </a>

                <form action="/dashboard/journal/{{ $journal->slug }}" method="POST" class="inline">

                    @csrf

                    @method('DELETE')

                    <button onclick="return confirm('Удалить запись?')" class="text-red-500 hover:text-red-400 ml-4">

                        🗑 Удалить

                    </button>

                </form>

            </div>

        @endforeach

    </p>

@endsection