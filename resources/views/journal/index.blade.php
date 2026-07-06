@extends('layouts.app')

@section('content')

<section class="pt-32 pb-12">

    <h1 class="text-5xl font-bold text-white mb-10">

        Бортовой журнал

    </h1>

    <div class="space-y-6">

        @foreach($journals as $journal)

            <x-journal-item :journal="$journal" />

        @endforeach

    </div>

</section>

@endsection