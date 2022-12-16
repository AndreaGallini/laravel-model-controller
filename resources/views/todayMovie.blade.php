@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <div class="row">


                @forelse ($todayMovie as $movie)
                    <div class="col-3 my_col">
                        <img src="{{ $movie->image }}" alt="{{ $movie->title }}">
                        <h3> Titolo : {{ $movie->title }}</h3>
                        <p> Titolo Originale : {{ $movie->original_title }}</p>
                        <p>Nazionalità: {{ $movie->nationality }}</p>
                        <p>Anno di produzione : {{ $movie->date }}</p>
                        <p> Voto : {{ $movie->vote }}</p>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </main>
@endsection
