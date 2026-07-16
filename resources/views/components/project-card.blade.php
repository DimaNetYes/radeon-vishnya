<div class="border border-white/40 rounded-2xl overflow-hidden shadow transition duration-300 md:hover:-translate-y-1 md:hover:shadow-xl">

    @if($project->image)

        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-52 md:h-56 object-cover object-center">

    @endif

    <div class="p-4 md:p-5">


        <h2 class="text-xl md:text-2xl font-bold text-red-100">{{ $project->localized_title }}</h2>

        <p class="mt-3 text-sm md:text-base text-gray-100">{{ $project->localized_description }}</p>

        <a href="/projects/{{ $project->slug }}" class="inline-flex justify-center items-center mt-5 md:mt-6 w-full md:w-auto border border-red-600 text-red-600 px-5 py-3 rounded-lg transition hover:bg-red-600 hover:text-white">
            {{ __('messages.Learn_more') }}
        </a>
    </div>

</div>