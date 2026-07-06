<input type="text" name="title" value="{{ old('title', $journal->title ?? '') }}" placeholder="Название"
    class="w-full bg-zinc-800 p-3 rounded-lg mb-4">

<textarea name="excerpt" class="w-full bg-zinc-800 p-3 rounded-lg mb-4" rows="4"
    placeholder="Краткое описание">{{ old('excerpt', $journal->excerpt ?? '') }}</textarea>

<textarea name="content" class="w-full bg-zinc-800 p-3 rounded-lg mb-4" rows="10"
    placeholder="Текст статьи">{{ old('content', $journal->content ?? '') }}</textarea>

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