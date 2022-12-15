<header>
    <div class="container">
        <!-- NAV -->
        <nav class="d-flex justify-content-around">
            <!-- LOGO -->
            <div class="logo">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
            </div>
            <ul class="d-flex align-items-center">
                <li class="mx-4">
                    <a href="{{ route('home') }}">HOME</a>
                </li>
                <li class="mx-4">
                    <a href="{{ route('characters') }}">CHARACTERS</a>
                </li>
                <li class="mx-4">
                    <a href="{{ route('movies') }}">MOVIES</a>
                </li>
            </ul>

            <input type="text" placeholder="search" class="align-self-center">
        </nav>

    </div>
</header>
