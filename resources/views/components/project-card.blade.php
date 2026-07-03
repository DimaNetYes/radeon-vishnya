<div class="border rounded-xl overflow-hidden shadow transition duration-300 hover:-translate-y-1 hover:shadow-xl">

    @if($project->image)

        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-200 h-56 object-cover">

    @endif

    <div class="p-5">


        <h2 class="text-2xl font-bold text-red-100">{{ $project->title }}</h2>

        <p class="mt-3 text-gray-100">{{ $project->description }}</p>

        <a href="/projects/{{ $project->slug }}" class="inline-block mt-6 border border-red-600 text-red-600 px-5 py-2 rounded-lg transition hover:bg-red-600 hover:text-white">
            Подробнее
        </a>
    </div>

</div>