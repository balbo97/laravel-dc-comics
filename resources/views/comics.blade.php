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
                                    href="{{ route('detail_comic', ['param' => $comic['id']]) }}">

                                    <img src="{{ $comic['thumb'] }}">
                                    <h6 class="card-text">{{ $comic['series'] }}</h6>
                                </a>

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
@endsection
