@extends('layout.app')

@section('content')
    <div class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-7">
                    <h3 class="text-uppercase">{{ $comic['title'] }}</h3>
                    <div class="bg-success d-flex">
                        <div class="d-flex justify-content-between p-2">
                            <p>U.S. price: {{ $comic['price'] }}</p>
                            <p>AVAILABLE</p>
                        </div>
                        <div>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
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
            </div>
        </div>
    </div>
@endsection
