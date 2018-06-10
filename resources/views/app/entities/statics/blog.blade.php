@extends('app')


@section('css')
@stop

@section('content')
    <div class="page-content">
        @include('app.partials.sidebar')
        <div class="content-page">
            <div class="row w-100 m-auto blog-list">
                <div class="col-md-6 pr-0">
                    <div class="block article-1">
                        <h2>Title</h2>
                        <p class="sub-deck">
                            Sous titre
                        </p>
                        <a href="{{ action('App\BlogController@show', 1) }}" class="mt-1 classic-btn">En savoir plus</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="block article-1">
                        <h2>Title</h2>
                        <p class="sub-deck">
                            Sous titre
                        </p>
                        <a href="{{ action('App\BlogController@show', 1) }}" class="mt-1 classic-btn">En savoir plus</a>
                    </div>
                </div>
                <div class="col-md-6 pr-0">
                    <div class="block article-1">
                        <h2>Title</h2>
                        <p class="sub-deck">
                            Sous titre
                        </p>
                        <a href="{{ action('App\BlogController@show', 1) }}" class="mt-1 classic-btn">En savoir plus</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="block article-1">
                        <h2>Title</h2>
                        <p class="sub-deck">
                            Sous titre
                        </p>
                        <a href="{{ action('App\BlogController@show', 1) }}" class="mt-1 classic-btn">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
@stop