<div class="sidebar">
    <div class="content-sidebar d-flex flex-column justify-content-center align-items-center">
        @if(!Auth::guest())
            <div class="mt-4">
                <a href="{{ action('App\StaticsController@showAcces') }}" class="nav-link">
                    <img src="{{ asset('images/icons/account.svg') }}" alt="">
                </a>
            </div>
            {{--<li class="nav-item">--}}
            {{--</li>--}}
        @endif
        <div class="mt-4">
            <img src="{{ asset('images/icons/compass.png') }}" alt="">
        </div>
        <div class="mt-4">
            <img src="{{ asset('images/icons/heartbeat.png') }}" alt="">
        </div>
        <div class="mt-4">
            <img src="{{ asset('images/icons/home.png') }}" alt="">
        </div>
        <div class="mt-4">
            <img src="{{ asset('images/icons/diploma.png') }}" alt="">
        </div>
        <div class="mt-4">
            <img src="{{ asset('images/icons/mask.png') }}" alt="">
        </div>
        <div class="mt-4">
            <img src="{{ asset('images/icons/world.png') }}" alt="">
        </div>
        <div class="mt-4">
            <img src="{{ asset('images/icons/plane.png') }}" alt="">
        </div>
    </div>
</div>