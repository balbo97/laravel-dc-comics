@extends('layout.app')

@section('content')
    <div class="bg-light p-5">
        <div class="container-details">
            <div class="row">
                <div class="col-7">
                    <h3 class="text-uppercase">{{ $comic['title'] }}</h3>
                    <div class="bg-success d-flex justify-content-between">
                        <div class="d-flex justify-content-between align-items-center">
                            <p>U.S. price: {{ $comic['price'] }}</p>
                            <p>AVAILABLE</p>
                        </div>
                        <div>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Check Availability
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <p>{{ $comic['description'] }}</p>
                </div>
                <div class="col-5">
                    <div class="img-container">
                        <img src="{{ $comic['thumb3'] }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
