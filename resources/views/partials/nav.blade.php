{{--LOOKS LIKE ITS WORKING--}}
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="#">
        <img src="https://dummyimage.com/300.png/09f/fff" width="30" height="30" class="d-inline-block align-top" alt="">
        Dream Car
    </a>
    <button class="navbar-toggler ml-auto p-2" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

{{--    <div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo01">
        <ul class="navbar-nav mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#">Car <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Truck</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
    </div>--}}
    <div class="relative flex items-top justify-center  bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Dash bored</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif

    </div>
</nav>
{{--THE END OF THEEEEE NAV--}}
