@extends('layout.app')


@section('content')
    {{-- COMICS  --}}
    <div class="bg-dark">

        <div class="container-sm py-5 text-light">
            <div class="row">
                <div class="col">
                    <div class="comics d-flex flex-wrap">

                        <div class="current-series p-2 bg-primary">Current Series</div>

                        @foreach ($comics as $comic)
                            <div class="regular-card">

                                <a class="link-underline link-underline-opacity-0"
                                    href="{{ route('comic.show', ['comic' => $comic->id]) }}">

                                    @if ($comic->thumb == null)
                                        <img src="{{ Vite::asset('resources/img/3993.jpg') }}" alt="">
                                    @else
                                        <img src="{{ $comic['thumb'] }}">
                                    @endif

                                    <h6 class="card-text">{{ $comic['title'] }}</h6>
                                </a>

                            </div>
                        @endforeach

                    </div>
                    <div class="d-flex justify-content-center mt-5">

                        <a class="btn btn-primary" href="{{ route('comic.create') }}" role="button">ADD COMIC</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
