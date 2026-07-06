<p>
    <input
        type="text"
        name="title"
        placeholder="Title"
        value="{{ old('title', $journal->title ?? '') }}">
        <!-- $journal->title ?? '' позволяет использовать одну и ту же форму и для создания, и для редактирования. -->
</p>

<p>
    <input
        type="text"
        name="slug"
        placeholder="Slug"
        value="{{ old('slug', $journal->slug ?? '') }}">
</p>

<p>
    <textarea
        name="excerpt"
        placeholder="Краткое описание">{{ old('excerpt', $journal->excerpt ?? '') }}</textarea>
</p>

<p>
    <textarea
        name="content"
        placeholder="Полный текст">{{ old('content', $journal->content ?? '') }}</textarea>
</p>

<p>
    <input type="file" name="image">
</p>

@if(isset($journal) && $journal->image)

    <img
        src="{{ asset('storage/'.$journal->image) }}"
        width="120">

@endif

<p>

    <button>

        Сохранить

    </button>

</p>