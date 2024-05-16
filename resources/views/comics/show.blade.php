@extends('layouts.app')

@section('content')
    <section id="comic">
        <div class="band">
            <div class="container-sm">
                <div class="poster">
                    <img src="{{ $comic['thumb'] ?? Vite::asset('resources/images/default.jpg') }}"
                        alt="{{ $comic['title'] }}">
                </div>
            </div>
        </div>
        <div class="top">
            <div class="container-sm pb-0">
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
            <div class="container-sm gx-0 d-flex">
                <a href="{{ route('comics.edit', $comic) }}" class="btn btn-secondary">Edit Comic</a>
                {{-- modal --}}
                <button type="button" class="btn btn-danger ms-1" data-bs-toggle="modal" data-bs-target="#comicModal">
                    Delete Comic
                </button>
                <div class="modal mt-5" id="comicModal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Deleting Comic</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure you want to delete this comic?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <form action="{{ route('comics.destroy', $comic) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger ms-1">Delete Comic</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
