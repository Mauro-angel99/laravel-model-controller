@extends('layouts.main')

@section('main-content')
<h1>My movies</h1>
<section>
    <div class="container">
        @foreach($movies as $movie)
        <div class="card">
            <h4>{{ $movie->title }}</h4>
            <h6>{{ $movie->original_title }}</h6>
            <h6>{{ $movie->nationality }}</h6>
            <h6>{{ $movie->date }}</h6>
            <h6>{{ $movie->vote }}</h6>
        </div>
        @endforeach
    </div>
</section>
@endsection