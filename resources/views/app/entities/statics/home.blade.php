@extends('app')


@section('css')
    <link rel="stylesheet" href="login.css">
@stop

@section('content')
    <div class="page-content">
        @include('app.partials.sidebar')
        <div class="content-page">
            <div class="home">
                <div class="container-fluid px-0 mx-0">
                    <div class="row">
                        <div class="col d-flex flex-column align-items-center w-50 justify-content-center first-section">
                            <h1>{!! getTexts('home-first-section-head-title') !!}</h1>
                            {!! getTexts('home-first-section-desc')  !!}
                            <button class="mt-5 classic-btn">{!! getTexts("home-second-section-first-block") !!}</button>
                        </div>
                    </div>
                </div>
            </div>
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
                            <span>{!! getTexts("home-day-week") !!}<strong>{!! getTexts("home-horraire-for-day-week") !!}</strong></span>
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
        </div>
    </div>
@stop

@section('js')
    <script>

        $(document).ready(function () {
            console.log('here')
        });
    </script>
@stop