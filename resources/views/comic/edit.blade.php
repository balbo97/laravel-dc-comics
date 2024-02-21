@extends('layout.app')


@section('content')
    {{-- FORM PER MODIFICARE UN COMIC --}}
    <div class="container-sm py-5">
        <div class="form-container">

            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">UPDATE COMIC</h2>
                </div>
                <div class="col-12">
                    <form action="{{ route('comic.update', ['comic' => $comic->id]) }}" method="post">
                        @csrf
                        @method('PATCH')

                        <div class="form-group my-3">
                            <label class="d-block" for="title">Title</label>
                            <input type="text" id="title" name="title" value="{{ $comic->title }}"
                                placeholder="Comic Name" required>
                        </div>
                        <div class="form-group my-3">
                            <label class="d-block" for="price">Price</label>
                            <input type="text" id="price" name="price" value="{{ $comic->price }}"
                                placeholder="Comic Price" required>
                        </div>
                        <div class="form-group my-3">
                            <label class="d-block" for="thumb">Link Image</label>
                            <input type="text" id="thumb" name="thumb" value="{{ $comic->thumb }}"
                                placeholder="Comic Url">
                        </div>
                        <div class="form-group my-3">

                            <label class="d-block" for="description">{{ $comic->decription }}</label>
                            <textarea name="description" id="description" cols="100" rows="10" placeholder="decription"></textarea>
                        </div>
                        <div class="form-group my-3">
                            <button class="btn btn-success" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
