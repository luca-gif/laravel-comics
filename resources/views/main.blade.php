<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Laravel-comics</title>
</head>

<body>


    @include('partials.header')

    @yield('content')

    @include('partials.footer')

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





</body>

</html>
