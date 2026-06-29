<div class="border rounded-xl overflow-hidden shadow">

    @if($project->image)

        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-200 h-56 object-cover">

    @endif

    <div class="p-5">


        <h2 class="text-2xl font-bold">{{ $project->title }}</h2>

        <p class="mt-3 text-gray-600">{{ $project->description }}</p>

        <a href="/projects/{{ $project->slug }}" class="inline-block mt-6 text-blue-600 font-semibold">
            Читать →
        </a>
    </div>

</div>