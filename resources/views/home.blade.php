@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row row-cols-6">

            @foreach ($comics as $comic)
                <div class="col">

                    <div class="lm-card my-3">

                        <div class="image">
                            <img src="{{ $comic->image }}" alt="{{ $comic->title }}">
                        </div>

                        <div class="col-text p-3 text-center">
                            <h6>Title: {{ $comic->title }}</h6>
                            <p>Genere: {{ $comic->type }}</p>
                        </div>

                    </div>

                </div>
            @endforeach

        </div>
    </div>
@endsection
