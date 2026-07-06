<p>
    <input
        type="text"
        name="title"
        placeholder="Название проекта"
        value="{{ old('title', $project->title ?? '') }}"
    >

    @error('title')
        <p>{{ $message }}</p>
    @enderror
</p>

<p>
    <input
        type="text"
        name="slug"
        placeholder="Slug"
        value="{{ old('slug', $project->slug ?? '') }}"
    >

    @error('slug')
        <p>{{ $message }}</p>
    @enderror
</p>

<p>
    <textarea
        name="description"
        placeholder="Описание"
    >{{ old('description', $project->description ?? '') }}</textarea>

    @error('description')
        <p>{{ $message }}</p>
    @enderror
</p>

@if(isset($project) && $project->image)
    <p>
        <img
            src="{{ asset('storage/' . $project->image) }}"
            alt="{{ $project->title }}"
            width="150"
        >
    </p>
@endif

<p>
    <input type="file" name="image">
</p>