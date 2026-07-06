@extends('layouts.dashboard')

@section('content')

    <h1 class="text-4xl font-bold mb-8">

        Новая запись

    </h1>

    @if ($errors->any())

        <div class="bg-red-600 text-white p-4 rounded mb-6">

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif

    <form action="/dashboard/journal" method="POST" enctype="multipart/form-data">

        @csrf

        @include('dashboard.journal._form')

    </form>

@endsection