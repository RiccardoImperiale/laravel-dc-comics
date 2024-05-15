@extends('layouts.app')

@section('content')
    <section id="comics">
        <div class="container">
            <div class="title_box">ALL COMICS</div>
            <div class="d-flex w-100">
                <a class="btn btn-primary mb-5" href="{{ route('comics.create') }}">Add New Comic</a>
            </div>
            <div class="comics">
                @forelse ($comics as $comic)
                    <a href="{{ route('comics.show', $comic) }}">
                        <div class="comic">
                            <div class="comic_image">
                                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                            </div>
                            <div class="comic_text text-wrap">
                                <div>
                                    <h2 class="comic_title">{{ $comic['title'] }}</h2>
                                    <p class="text-wrap">
                                        {!! $comic['description'] !!}
                                    </p>
                                </div>
                                <div class="bottom_text">
                                    <h4>{{ $comic['price'] }}</h4>
                                    <small>{{ $comic['sale_date'] }}</small>
                                </div>
                            </div>
                        </div>
                    </a>
                @empty
                    <p>Sorry, no comics to show...</p>
                @endforelse
            </div>
            {{ $comics->links('pagination::bootstrap-5') }}
        </div>
    </section>
@endsection
