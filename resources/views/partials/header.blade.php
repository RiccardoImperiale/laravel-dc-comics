<header>
    <nav>
        <div class="top">
            <div class="container">
                <ul>
                    <li>DC POWER VISA &reg;</li>
                    <li>ADDITIONAL DC SITES <span class="triangle">&#9660;</span></li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="bottom">
                <img width="60" src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="logo dc">
                <ul>
                    {{-- <li><a class="disabled" href="#">CHARACTERS</a></li> --}}
                    <li><a class="{{ Route::currentRouteName() === 'home' || Route::currentRouteName() === 'comics.index' ? '' : 'disabled' }}"
                            href="{{ route('comics.index') }}">ALL COMICS</a></li>
                    <li><a class="{{ Route::currentRouteName() !== 'create' ? 'disabled' : '' }}" href="#">ADD
                            COMIC</a></li>
                    {{-- <li><a class="disabled" href="#">TV</a></li>
                    <li><a class="disabled" href="#">GAMES</a></li>
                    <li><a class="disabled" href="#">COLLECTIBLES</a></li>
                    <li><a class="disabled" href="#">VIDEOS</a></li>
                    <li><a class="disabled" href="#">FANS</a></li>
                    <li><a class="disabled" href="#">NEWS</a></li>
                    <li><a class="disabled" href="#">SHOP <span class="triangle">&#9660;</span></a></li> --}}
                </ul>
                <div class="input">
                    <input type="text" placeholder="Search">
                    <img width="16" src="{{ Vite::asset('resources/images/m-glass.png') }}" alt="magnifying glass">
                </div>
            </div>
        </div>
    </nav>
</header>
