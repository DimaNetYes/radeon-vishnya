<a href="/journal/{{ $journal->slug }}" class="flex block gap-4 hover:bg-zinc-800 rounded-xl p-2 transition ">

    @if($journal->image)
        <img src="{{ asset('storage/' . $journal->image) }}" class="w-24 h-20 rounded-lg object-cover">
    @endif

    <div class="flex-1">
        <div class="flex justify-between items-start">

            <h3 class="font-semibold text-red-600">
                {{ $journal->title }}
            </h3>

            <span class="text-gray-500">
                {{ $journal->published_at->format('d.m.Y') }}
            </span>
        </div>

        <p class="text-white">
            {{ $journal->excerpt }}
        </p>

    </div>

</a>