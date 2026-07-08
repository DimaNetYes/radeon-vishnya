<!-- title 3 language -->
<div class="mb-6">

    <label class="block mb-2 text-zinc-400">
        Название (RU)
    </label>

    <input type="text" name="title" placeholder="Название проекта" value="{{ old('title', $project->title ?? '') }}"
        class="w-full bg-zinc-800 rounded-lg p-3">

</div>
<div class="mb-6">

    <label class="block mb-2 text-zinc-400">
        Title (EN)
    </label>

    <input type="text" name="title_en" value="{{ old('title_en', $project->title_en ?? '') }}"
        class="w-full bg-zinc-800 rounded-lg p-3">

</div>
<div class="mb-6">

    <label class="block mb-2 text-zinc-400">
        Titel (DE)
    </label>

    <input type="text" name="title_de" value="{{ old('title_de', $project->title_de ?? '') }}"
        class="w-full bg-zinc-800 rounded-lg p-3">

</div>

<!-- Description 3 languages -->
<div class="mb-6">

    <label class="block mb-2 text-zinc-400">
        Описание (RU)
    </label>

    <textarea name="description" rows="6" placeholder="Описание проекта"
        class="w-full bg-zinc-800 rounded-lg p-3">{{ old('description', $project->description ?? '') }}</textarea>

</div>
<div class="mb-6">

    <label class="block mb-2 text-zinc-400">
        Description (EN)
    </label>

    <textarea name="description_en" rows="5"
        class="w-full bg-zinc-800 rounded-lg p-3">{{ old('description_en', $project->description_en ?? '') }}</textarea>

</div>
<div class="mb-6">

    <label class="block mb-2 text-zinc-400">
        Beschreibung (DE)
    </label>

    <textarea name="description_de" rows="5"
        class="w-full bg-zinc-800 rounded-lg p-3">{{ old('description_de', $project->description_de ?? '') }}</textarea>

</div>


@if(isset($project) && $project->image)

    <img src="{{ asset('storage/' . $project->image) }}" class="w-48 rounded-lg mb-6">

@endif

<input type="file" name="image">

<input type="text" name="telegram_url" placeholder="Telegram Bot"
    value="{{ old('telegram_url', $project->telegram_url ?? '') }}" class="w-full bg-zinc-800 rounded-lg p-3 mb-4">

<input type="text" name="github_url" placeholder="GitHub" value="{{ old('github_url', $project->github_url ?? '') }}"
    class="w-full bg-zinc-800 rounded-lg p-3 mb-4">

<input type="text" name="demo_url" placeholder="Демо" value="{{ old('demo_url', $project->demo_url ?? '') }}"
    class="w-full bg-zinc-800 rounded-lg p-3 mb-4">

<input type="text" name="apk_url" placeholder="APK" value="{{ old('apk_url', $project->apk_url ?? '') }}"
    class="w-full bg-zinc-800 rounded-lg p-3 mb-4">

<button class="mt-6 bg-red-600 px-5 py-3 rounded-lg hover:bg-red-700">

    Сохранить

</button>