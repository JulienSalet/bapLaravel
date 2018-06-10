@extends('app')


@section('css')
@stop

@section('content')
    <div class="page-content h-auto p-0 mb-5">
        @include('app.partials.sidebar')
        <div class="content-page">
            <div class="row w-100 m-auto blog-list">
                @foreach($articles as $article)
                    <div class="col-md-6 pr-0">
                        <div class="block article-1">
                            <h2>{{ $article->title }}</h2>
                            <p class="sub-deck">
                                {{ $article->subtitle }}
                            </p>
                            <a href="{{ action('App\BlogController@show', $article->slug) }}" class="mt-1 classic-btn">{!! getTexts("home-btn-show-article") !!}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop

@section('js')
@stop