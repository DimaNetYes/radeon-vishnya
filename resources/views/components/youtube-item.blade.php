<div>
    @php
        // Ограничить длину заголовка
        use Illuminate\Support\Str;
    @endphp

    <a href="{{ $video['url'] }}" target="_blank">

        <img src="{{ $video['thumbnail'] }}" alt="{{ $video['title'] }}" class="rounded-lg w-full">

        <h3 class="mt-3 font-semibold text-white font-semibold line-clamp-2">
            {{ $video['title'] }}
        </h3>
        
        <div class="mt-5 text-gray-600">{{ $video['published'] }}</div>
        
    </a>

</div>