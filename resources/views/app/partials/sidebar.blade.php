<div class="sidebar">
    <div class="content-sidebar d-flex flex-column justify-content-center align-items-center">
        @if(!Auth::guest())
            <div class="mt-4">
                <a href="{{ action('Auth\AccountController@showAccount') }}" class="nav-link">
                    <img src="{{ asset('images/icons/account.svg') }}" alt="">
                </a>
            </div>
            {{--<li class="nav-item">--}}
            {{--</li>--}}
        @endif
        <div class="mt-4">
            <a href="orientation"> <img src="{{ asset('images/icons/compass.png') }}" alt=""></a>
        </div>
        <div class="mt-4">
            <a href="sante"><img src="{{ asset('images/icons/heartbeat.png') }}" alt=""></a>
        </div>
        <div class="mt-4">
            <a href="logement"><img src="{{ asset('images/icons/home.png') }}" alt=""></a>
        </div>
        <div class="mt-4">
            <a href="scolarite"><img src="{{ asset('images/icons/diploma.png') }}" alt=""></a>
        </div>
        <div class="mt-4">
            <a href="loisir"><img src="{{ asset('images/icons/mask.png') }}" alt=""></a>
        </div>
        <div class="mt-4">
            <a href="mobilite"><img src="{{ asset('images/icons/world.png') }}" alt=""></a>
        </div>
        <div class="mt-4">
            <a href="voyage"><img src="{{ asset('images/icons/plane.png') }}" alt=""></a>
        </div>
    </div>
</div>