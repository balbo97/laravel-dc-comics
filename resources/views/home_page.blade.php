<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>


    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    {{-- HEADER  --}}
    @include('partials.header')

    {{-- MAIN  --}}
    <main>
        {{-- JUMBOTRONE --}}
        @include('partials.jumbotrone')

        {{-- COMICS  --}}
        <div class="bg-dark">

            <div class="container-sm py-5 text-light">
                <div class="row">
                    <div class="col">
                        <div class="comics d-flex flex-wrap">

                            <div class="current-series p-2 bg-primary">Current Series</div>

                            @foreach ($comics as $comic)
                                <div class="regular-card">

                                    <img src="{{ $comic['thumb'] }}">
                                    <h6 class="card-text">{{ $comic['series'] }}</h6>

                                </div>
                            @endforeach

                        </div>
                        <div class="d-flex justify-content-center mt-5">

                            <a class="btn btn-primary" href="#" role="button">LOAD MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- BLU BAR  --}}
        @include('partials.blu_bar')
    </main>

    {{-- FOOTER  --}}
    @include('partials.footer')
</body>

</html>
