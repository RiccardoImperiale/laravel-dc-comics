@extends('layouts.app')

@section('content')
    <section class="container my-5">
        <h2 class="mb-3 text-center">Edit Comic</h2>
        <form method="post" action="{{ route('comics.update', $comic) }}">
            @csrf
            @method('PUT')

            @include('partials.validation-errors')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title"
                    value="{{ old('title', $comic->title) }}">
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description"
                    placeholder="Enter a description" id="description" style="height: 100px">{{ old('description', $comic->description) }}</textarea>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" name="thumb" class="form-control @error('thumb') is-invalid @enderror"
                    placeholder="https://" id="thumb" value="{{ old('thumb', $comic->thumb) }}">
                @error('thumb')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" name="price" class="form-control @error('price') is-invalid @enderror"
                    placeholder="$" id="price" value="{{ old('price', $comic->price) }}">
                @error('price')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" name="series" class="form-control @error('series') is-invalid @enderror"
                    id="series" value="{{ old('series', $comic->series) }}">
                @error('series')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="date" name="sale_date" class="form-control @error('sale_date') is-invalid @enderror"
                    id="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
                @error('sale_date')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" name="type" class="form-control @error('type') is-invalid @enderror" id="type"
                    value="{{ old('type', $comic->type) }}">
                @error('type')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary w-100 mt-4">Submit</button>
        </form>

    </section>
@endsection
