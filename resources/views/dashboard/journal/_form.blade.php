<!-- title 3 language -->
<div class="mb-6">
    <label class="block mb-2 text-zinc-400">
        Название (RU)
    </label>
    <input type="text" name="title" value="{{ old('title', $journal->title ?? '') }}" placeholder="Название"
        class="w-full bg-zinc-800 p-3 rounded-lg mb-4">
</div>

<div class="mb-6">
    <label class="block mb-2 text-zinc-400">
        Title (EN)
    </label>
    <input type="text" name="title_en" value="{{ old('title_en', $journal->title_en ?? '') }}" placeholder="Название"
        class="w-full bg-zinc-800 p-3 rounded-lg mb-4">
</div>

<div class="mb-6">
    <label class="block mb-2 text-zinc-400">
        Title (DE)
    </label>
    <input type="text" name="title_de" value="{{ old('title_de', $journal->title_de ?? '') }}" placeholder="Название"
        class="w-full bg-zinc-800 p-3 rounded-lg mb-4">
</div>





<!-- Excerpt 3 languages -->
<div class="mb-6">
    <label class="block mb-2 text-zinc-400">
        Краткое описание (RU)
    </label>

    <textarea name="excerpt" class="w-full bg-zinc-800 p-3 rounded-lg mb-4" rows="4"
        placeholder="Краткое описание">{{ old('excerpt', $journal->excerpt ?? '') }}</textarea>

</div>

<div class="mb-6">
    <label class="block mb-2 text-zinc-400">
        Excerpt (EN)
    </label>

    <textarea name="excerpt_en" class="w-full bg-zinc-800 p-3 rounded-lg mb-4" rows="4"
        placeholder="Краткое описание">{{ old('excerpt_en', $journal->excerpt_en ?? '') }}</textarea>

</div>

<div class="mb-6">
    <label class="block mb-2 text-zinc-400">
        Kurzbeschreibung (DE)
    </label>

    <textarea name="excerpt_de" class="w-full bg-zinc-800 p-3 rounded-lg mb-4" rows="4"
        placeholder="Краткое описание">{{ old('excerpt_de', $journal->excerpt_de ?? '') }}</textarea>

</div>



<!-- Description 3 languages -->
<div class="mb-6">
    <label class="block mb-2 text-zinc-400">
        Описание
    </label>


    <textarea name="content" class="w-full bg-zinc-800 p-3 rounded-lg mb-4" rows="10"
        placeholder="Текст статьи">{{ old('content', $journal->content ?? '') }}</textarea>
</div>

<div class="mb-6">
    <label class="block mb-2 text-zinc-400">
        Article (EN)
    </label>


    <textarea name="content_en" class="w-full bg-zinc-800 p-3 rounded-lg mb-4" rows="10"
        placeholder="Текст статьи">{{ old('content_en', $journal->content_en ?? '') }}</textarea>
</div>

<div class="mb-6">
    <label class="block mb-2 text-zinc-400">
        Artikel (DE)
    </label>


    <textarea name="content_de" class="w-full bg-zinc-800 p-3 rounded-lg mb-4" rows="10"
        placeholder="Текст статьи">{{ old('content_de', $journal->content_de ?? '') }}</textarea>
</div>




<div class="mb-6">
    @if(isset($journal) && $journal->image)
        <img src="{{ asset('storage/' . $journal->image) }}" class="w-48 rounded-lg mb-6">
    @endif

    <label class="block mb-2">
        Обложка
    </label>

    <input type="file" name="image" class="w-full">

</div>

<button class="bg-red-600 px-5 py-3 rounded-lg">

    Сохранить

</button>