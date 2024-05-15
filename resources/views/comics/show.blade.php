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
                            <p>U.S. Price: <span>{{ $comic['price'] }}</span> </p>
                            <p><span>AVAILABLE</span></p>
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
        <div class="bottom">
            <div class="container-sm">
            </div>
        </div>
    </section>
@endsection
