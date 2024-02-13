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
        <div class="jumbotrone"></div>

        {{-- COMICS  --}}
        <div class="bg-dark">

            <div class="container-sm py-5 text-light">
                <div class="row">
                    <div class="col">
                        <div class="comics d-flex flex-wrap">

                            <div class="current-series p-2 bg-primary">Current Series</div>
                            <AppComics v-for="comic, index in comics" :key="index" :comic="comic" />

                        </div>
                        <div class="d-flex justify-content-center mt-5">

                            <a class="btn btn-primary" href="#" role="button">LOAD MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- BLU BAR  --}}
        <div class="buy_comics">
            <div class="container-sm">
                <div class="row">
                    <div class="col">
                        <div class="images d-flex justify-content-around">

                            <img src="{{ Vite::asset('../resources/img/buy-comics-digital-comics.png') }}"
                                alt="">
                            <img src="{{ Vite::asset('../resources/img/buy-comics-merchandise.png') }}" alt="">
                            <img src="{{ Vite::asset('../resources/img/buy-comics-shop-locator.png') }}" alt="">
                            <img src="{{ Vite::asset('../resources/img/buy-comics-subscriptions.png') }}"alt="">

                            <img src="{{ Vite::asset('../resources/img/buy-dc-power-visa.svg') }}" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

    {{-- FOOTER  --}}
    @include('partials.footer')
</body>

</html>
