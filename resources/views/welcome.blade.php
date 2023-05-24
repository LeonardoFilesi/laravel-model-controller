@extends('layout.page')

@section('welcome')
    <div class="container d-flex flex-wrap text-center">
        @foreach ($movies as $movie)
            <div class="card" style="width: 210px; margin: 10px">
                <img src="{{ $movie->image }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <p class="card-text">Original Title: {{ $movie->original_title }}</p>
                    <p class="card-text">Nationality: {{ $movie->nationality }}</p>
                    <p class="card-text">Release Date: {{ $movie->date }}</p>
                    <p class="card-text">Vote: {{ $movie->vote }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection