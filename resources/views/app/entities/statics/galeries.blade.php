@extends('app')


@section('css')
@stop

@section('content')
    <div class="">
        @include('app.partials.sidebar')
        <div class="content-page">
            <div class="home galerie">
                <div class="container-fluid px-0 mx-0">
                    <div class="row">
                        <div class="col d-flex flex-column align-items-center w-50 justify-content-center first-section">
                            <h1>Galerie</h1>
                            <div class="d-flex justify-content-around align-items-center">
                                <div class="col-md-4 ml-4 article-1 d-flex align-items-center justify-content-center">
                                    <h2>Mai 2018</h2>
                                </div>
                                <div class="col-md-4 ml-4 article-2 d-flex align-items-center justify-content-center">
                                    <h2>Mai 2018</h2>
                                </div>
                                <div class="col-md-4 ml-4 article-3 d-flex align-items-center justify-content-center">
                                    <h2>Mai 2018</h2>
                                </div>
                            </div>
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
            </div>
        </div>
    </div>
@stop

@section('js')
@stop