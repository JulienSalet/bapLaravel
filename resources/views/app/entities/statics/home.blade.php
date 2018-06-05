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
                            <h1>{{ getTexts('home-first-section-head-title') }}</h1>
                            {!! getTexts('home-first-section-desc')  !!}
                            <button class="mt-5 classic-btn">{{ getTexts("home-second-section-first-block") }}</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="second-section mt-4 ml-2">
                
                <div class="d-flex h-50">
                    <div class="block article-1">
                        <h2>Article 1</h2>
                        <button class="mt-1 classic-btn">En savoir plus</button>
                    </div>
                    <div class="block maternelle-1">
                        <span>News</span>
                        <h2 class="text-center">Réhabilitation d'une maternelle</h2>
                        <button class="mt-1 classic-btn">En savoir plus</button>
                    </div>
                </div>
                <div class="d-flex h-50 mt-4">
                    <div class="block article-2">
                        <h2>Article 2</h2>
                        <button class="mt-1 classic-btn">En savoir plus</button>
                    </div>
                    <div class="block info">
                        <h2 class="text-center">Info pratiques</h2>
                        <div class="d-flex flex-column">
                            <span>Horaires :</span>
                            <span>Lundi - Vendredi : <strong>9h - 22H</strong></span>
                            <span class="decal">Samedi : <strong>10h - 20H</strong></span>
                        </div>
                    </div>
                </div>
                <div class="d-flex h-50 mt-4">
                    <div class="block article-3">
                        <h2>Article 3</h2>
                        <button class="mt-1 classic-btn">En savoir plus</button>
                    </div>
                </div>
                {{--<div class="row mt-3">--}}
                    {{--<div class="col-md-6 first-block d-flex flex-column justify-content-center align-items-center">--}}
                        {{--<div class="w-100 position-relative" style="margin-bottom: 100px">--}}
                            {{--<div class="item-img">--}}
                            {{--<img src="{{ asset('images/photo-article-1.png') }}" alt="">--}}
                            {{--</div>--}}
                            {{--<div class=" item-text d-flex flex-column justify-content-center align-items-center">--}}
                                {{--<h2>Article 1</h2>--}}
                                {{--<button class="mt-1 classic-btn">En savoir plus</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
@stop

@section('js')
    <script>
        
        $(document).ready(function(){
            console.log('here')
        });
    </script>
@stop