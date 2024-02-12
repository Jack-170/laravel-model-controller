@extends('layouts.main-layout')
@section('head')
    <title>Movies</title>
@endsection
@section('content')
<div class="row">
    @foreach ($movies as $movie)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">{{ $movie['title'] }}</h5>
                    <p class="card-text">Titolo Originale: {{ $movie['original_title'] }}</p>
                </div>
                <div class="card-body">
                    <p class="card-text">Nazionalità: {{ $movie['nationality'] }}</p>
                    <p class="card-text">Data: {{ $movie['date'] }}</p>
                    <p class="card-text">Voto: {{ $movie['vote'] }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
