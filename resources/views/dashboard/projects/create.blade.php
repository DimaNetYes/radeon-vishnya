@extends('layouts.dashboard')

@section('content')

 @if ($errors->any())

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

    @endif

<h1 class="text-4xl font-bold mb-8">

    Новый проект

</h1>

<form
    action="/dashboard/projects"
    method="POST"
    enctype="multipart/form-data">

    @csrf

    @include('dashboard.projects._form')

</form>

@endsection