<div class="second-section mt-4 ml-2">
    {{--Je fais mon foreach ici pour afficher mes articles--}}
    <div class="d-flex h-50">
        @foreach($articles->slice(0,1) as $article)
            <div class="block article-1">
                <h2>{{ $article->title }}</h2>
                <p class="sub-deck">
                    {!! $article->excerpt !!}
                </p>
                <a href="{{ action('App\BlogController@show', $article->slug) }}" class="mt-1 classic-btn">{!! getTexts("home-btn-show-article") !!}</a>
            </div>
        @endforeach
        <div class="block maternelle-1">
            <span>{!! getTexts("home-span-news") !!}</span>
            <h2 class="text-center">{!! getTexts('home-span-maternelle') !!}</h2>
            <button class="mt-1 classic-btn">{!! getTexts('home-btn-new') !!}</button>
        </div>
    </div>
    {{--@foreach($articles->slice(0,1) as $article)--}}
    {{--<div class="d-flex h-50">--}}
    {{--<div class="block article-1">--}}
    {{--<h2>{{ $article->title }}</h2>--}}
    {{--<a href="{{ action('App\BlogController@show', $article->slug) }}" class="mt-1 classic-btn">En savoir plus</a>--}}
    {{--</div>--}}
    {{--@endforeach--}}
    
    <div class="d-flex h-50 mt-4">
        @foreach($articles->slice(1,1) as $article)
            <div class="block article-2">
                <h2>{{ $article->title }}</h2>
                <p class="sub-deck">
                    {!! $article->excerpt  !!}
                </p>
                <a href="{{ action('App\BlogController@show', $article->slug) }}"
                   class="mt-1 classic-btn">{!! getTexts("home-btn-show-article") !!}</a>
            </div>
        @endforeach
        <div class="block info">
            <h2 class="text-center">{!! getTexts("home-partical-info-span") !!}</h2>
            <div class="d-flex flex-column">
                <span>{!! getTexts("home-span-horaire") !!}</span>
                <span class="decal">{!! getTexts("home-day-week") !!}<strong>{!! getTexts("home-horraire-for-day-week") !!}</strong></span>
                <span class="decal">{!! getTexts("home-day-wekkend") !!} <strong>{!! getTexts("home-horraire-for-weekend") !!}</strong></span>
            </div>
        </div>
    </div>
    
    <div class="d-flex h-50 mt-4">
        @foreach($articles->slice(2,1) as $article)
            <div class="block article-3">
                <h2>{{ $article->title }}</h2>
                <p class="sub-deck">
                    {!! $article->excerpt  !!}
                </p>
                <a href="{{ action('App\BlogController@show', $article->slug) }}"
                   class="mt-1 classic-btn">{!! getTexts("home-btn-show-article") !!}</a>
            </div>
        @endforeach
    </div>
</div>