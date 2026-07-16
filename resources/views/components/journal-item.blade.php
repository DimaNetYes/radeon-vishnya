<a href="/journal/{{ $journal->slug }}"
    class="flex block gap-4 hover:bg-zinc-800 rounded-xl py-2 pr-2 md:p-2 transition ">

    @if($journal->image)
        <div class="flex flex-col">
            <img src="{{ asset('storage/' . $journal->image) }}"
                class="w-22 h-32 md:w-24 md:h-20 rounded-lg object-cover flex-shrink-0">

            <span class="md:hidden text-xs text-gray-500 mt-2 text-center">
                {{ $journal->published_at->format('d.m.Y') }}
            </span>
        </div>
    @endif

    <div class="flex-1">
        <div class="flex justify-between items-start">

            <h3 class="text-base md:text-lg font-semibold text-red-600">
                {{  $journal->localized_title }}
            </h3>

            <span class="hidden md:block text-gray-500">
                {{ $journal->published_at->format('d.m.Y') }}
            </span>
        </div>

        <p class="text-sm md:text-base text-white">
            {{  $journal->localized_excerpt }}
        </p>

    </div>

</a>