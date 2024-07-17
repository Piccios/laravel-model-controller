@extends('layout.app')
@section('page-title', 'Movies')

@section('main-content')
    <section class="container">
        @foreach ($movies as $movie)
            <div class="row">
                <div class="card">
                    <div class="card-body"></div>
                        <h1><strong>{{$movie['title']}}</strong></h1>
                        <h2><strong>Movie's original title: </strong> {{ $movie['original_title']}}</h2>
                        <p><strong>Movie's nationality: </strong> {{$movie['nationality'] }}</p>
                        <p><strong>Movie's date: </strong> {{ $movie['date'] }}</p>
                        <p><strong>Movie's vote: </strong> {{ $movie['vote'] }}</p>
                    </div>



        @endforeach
        </div>
    </section>
@endsection
