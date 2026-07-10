@extends('layouts.app')

@section('content')

<section class="pt-32 pb-12 min-h-screen bg-cover bg-center" style="background-image:url('{{ asset('images/backgrounds/bg1.png') }}')">

    <h1 class="text-5xl font-bold text-white mb-10 text-center">

        {{ __('messages.sec4_Logbook') }}

    </h1>

    <div class="space-y-6">

        @foreach($journals as $journal)

            <x-journal-item :journal="$journal" />

        @endforeach

    </div>

</section>

@endsection