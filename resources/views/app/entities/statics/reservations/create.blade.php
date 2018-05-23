@extends('app')


@section('css')
@stop

@section('content')
    <div class="">
        @include('app.partials.sidebar')
        <div class="content-page">
            <div class="home galerie resa">
                <div class="container-fluid px-0 mx-0">
                    <div class="row">
                        <div class="col d-flex flex-column align-items-center w-50 justify-content-center first-section">
                            <h1>Réservation</h1>
                            <div class="row w-75">
                                <div class="col-md-6">
                                    <div class="form-group d-flex align-items-center justify-content-between">
                                        <label for="exampleInputEmail1" class="text-white">Adresse email</label>
                                        <input type="email" class="form-control">
                                    </div>
                                    <div class="form-group d-flex align-items-center justify-content-between">
                                        <label for="exampleInputEmail1" class="text-white">Mot de passe</label>
                                        <input type="password" class="form-control">
                                    </div>
                                    <div class="form-group d-flex align-items-center justify-content-between">
                                        {{--<label for="exampleInputEmail1" class="text-white">Nom</label>--}}
                                        {{--<input type="text" class="form-control">--}}
                                        <button class="classic-btn co text-center">Connexion</button>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group d-flex align-items-center justify-content-between">
                                        <label for="exampleInputEmail1" class="text-white">Nom</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group d-flex align-items-center justify-content-between">
                                        <label for="exampleInputEmail1" class="text-white">Prénom</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group d-flex align-items-center justify-content-between">
                                        <label for="exampleInputEmail1" class="text-white">Adresse email</label>
                                        <input type="email" class="form-control">
                                    </div>
                                    <div class="form-group d-flex align-items-center justify-content-between">
                                        <label for="exampleInputEmail1" class="text-white">Mot de passe</label>
                                        <input type="password" class="form-control">
                                    </div>
                                    <div class="form-group d-flex align-items-center justify-content-between">
                                        {{--<label for="exampleInputEmail1" class="text-white">Nom</label>--}}
                                        {{--<input type="text" class="form-control">--}}
                                        <button class="classic-btn inscri text-center">Inscription</button>
                                    </div>
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