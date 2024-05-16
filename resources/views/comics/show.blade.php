@extends('layouts.app')

@section('content')
    <section id="comic">
        <div class="band">
            <div class="container-sm">
                <div class="poster">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                </div>
            </div>
        </div>
        <div class="top">
            <div class="container-sm">
                <div class="left">
                    <div class="title">{{ $comic['title'] }}</div>
                    <div class="green_band">
                        <div class="left">
                            <p class="my-1">U.S. Price: <span>{{ $comic['price'] }}</span> </p>
                            <p class="my-1"><span>AVAILABLE</span></p>
                        </div>
                        <div class="right">
                            <a href="#">Check Availability</a>
                        </div>
                    </div>
                    <div class="description">
                        <p>
                            {{ $comic['description'] }}
                        </p>
                    </div>
                </div>
                <div class="right">
                    <div class="add">
                        <h5>ADVERTISEMENT</h5>
                        <img src="{{ Vite::asset('resources/images/adv.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom pb-5">
            <div class="container-sm gx-0">
                <a href="{{ route('comics.edit', $comic) }}" class="btn btn-secondary">Edit Comic</a>
                <button class="btn btn-danger ms-1">Delete Comic</button>
            </div>
        </div>
    </section>
@endsection
