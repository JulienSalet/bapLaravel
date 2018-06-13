<nav class="nav home-nav">
    <ul class="container d-flex justify-content-around align-items-center w-100 nav   ">
        <li class="nav-item classic-link">
            <a href="{{ action('App\StaticsController@showReservation') }}" class="nav-link">Réservation</a>
        </li>
        <li class="nav-item classic-link">
            <a href="{{ action('App\StaticsController@showBlog') }}" class="nav-link">Blog</a>
        </li>
        <li class="nav-item">
            <a href="{{ action('App\StaticsController@home') }}" class="nav-link"><img height="75" src="{{ asset('images/logo-2.png') }}" alt=""></a>
        </li>
        <li class="nav-item classic-link">
            <a href="{{ action('App\StaticsController@showGaleries') }}" class="nav-link">Galerie</a>
        </li>
        <li class="nav-item classic-link">
            <a href="{{ action('App\StaticsController@showAcces') }}" class="nav-link">Accès</a>
        </li>
    </ul>
</nav>