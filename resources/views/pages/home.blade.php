@extends('layout.app')
@section('page-title', 'Homepage')

    @section('main-content')

    <section class="container">
        <div class="row">
            <div class="col-12">
                <h1>Main page</h1>
                @foreach($movies as $movie)
                <div class="col-12">
                    <h2>{{ $movie->title }}</h2>
                    <p>{{ $movie->description }}</p>
                </div>
            @endforeach
        </div>
    </section>
    @endsection
