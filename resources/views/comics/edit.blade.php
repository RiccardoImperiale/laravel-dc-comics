@extends('layouts.app')

@section('content')
    <section class="container my-5">
        <h2 class="mb-3 text-center">Edit Comic</h2>
        <form method="post" action="{{ route('comics.update', $comic) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" value="{{ $comic->title }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" placeholder="Enter a description" id="description"
                    style="height: 100px">{{ $comic->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" name="thumb" class="form-control" placeholder="https://" id="thumb"
                    value="{{ $comic->thumb }}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" name="price" class="form-control" placeholder="$" id="price"
                    value="{{ $comic->price }}">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" name="series" class="form-control" id="series" value="{{ $comic->series }}">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="date" name="sale_date" class="form-control" id="sale_date" value="{{ $comic->sale_date }}">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" name="type" class="form-control" id="type" value="{{ $comic->type }}">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </section>
@endsection
