@extends('layout.app')
@section('page-title', 'Movies')



@section('main-content')
    <section class="header">
        <div class="container d-flex justify-content-center">
            <h1>movie list</h1>
    </section>
    <section class="container d-flex justify-content-center">
        @foreach ($movies as $movie)
            <div>
                <div class="card">
                    <div class="card-body"></div>
                        <h2><strong>{{$movie['title']}}</strong></h2>
                        <h2><strong>Movie's original title: </strong> {{ $movie['original_title']}}</h2>
                        <p><strong>Movie's nationality: </strong> {{$movie['nationality'] }}</p>
                        <p><strong>Movie's date: </strong> {{ $movie['date'] }}</p>
                        <p><strong>Movie's vote: </strong> {{ $movie['vote'] }}</p>
                    </div>
        @endforeach
        </div>
    </section>
@endsection
