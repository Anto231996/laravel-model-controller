@extends('layouts.app')

@section('title', 'Movie')

@section('main-content')
<div class="container py-5">
    <div class="row row-cols-5">
        @foreach ($movies as $movie)
        <div class="col mb-5">
            <div class="card" style="height: 250px; width:250px">
                <div class="card-body">
                    <h6 class="card-title mb-4 fw-bold">{{ $movie->title }}</h6>
                    <p class="card-text">Titolo originale: <small class="text-muted">{{ $movie->original_title}}</small></p>
                    <p class="card-text">Nazionalita': <small class="text-muted">{{ $movie->nationality}}</small></p>
                    <p class="card-text">Uscita: <small class="text-muted">{{ $movie->date }}</small></p>
                    <p class="card-text">Voto: <small class="text-muted">{{ $movie->vote }}</small></p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection