<header>
    <div class="container">
        <!-- LOGO -->
        <div class="logo">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
            <!-- NAV -->
        </div>
        <nav>
            <ul class="d-flex justify-content-center">
                <li class="mx-4">
                    <a href="{{ route('home') }}">HOME</a>
                </li>
                <li class="mx-4">
                    <a href="{{ route('characters') }}">Characters</a>
                </li>
                <li class="mx-4">
                    <a href="{{ route('movies') }}">Movies</a>
                </li>
            </ul>

        </nav>
        <input type="text" placeholder="search">

    </div>
</header>
