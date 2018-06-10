@extends('app')


@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>

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
                            <p class="sub-deck">
                                Prenez une reservation !
                            </p>
                            @if(\Illuminate\Support\Facades\Auth::guest())
                                <div class="row w-75">
                                    <form action="{{ action('App\StaticsController@login') }}"
                                          class="col-md-6 d-flex flex-column">
                                        {{ csrf_field() }}
                                        {{--<div class="col-md-6">--}}
                                        <div class="form-group d-flex align-items-center justify-content-between">
                                            <label for="exampleInputEmail1"
                                                   class="text-white">{!! getTexts('reservation-first-input-label') !!}</label>
                                            <input type="email" class="form-control" name="email">
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-between">
                                            <label for="exampleInputEmail1" class="text-white">Mot de passe</label>
                                            <input type="password" class="form-control" name="password">
                                        </div>
                                        <div class="form-group d-flex flex-column align-items-center justify-content-center">
                                            {{--<label for="exampleInputEmail1" class="text-white">Nom</label>--}}
                                            {{--<input type="text" class="form-control">--}}
                                            @if(Session::has('errors'))
                                                @if ($errors->has('email'))
                                                    <span class="co help-block text-danger">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                                @endif
                                            @endif
                                            <button class="classic-btn co text-center">Connexion</button>
                                        </div>
                                        {{--</div>--}}
                                    </form>
                                    <form method="POST" action="{{ action('App\StaticsController@register') }}"
                                          class="col-md-6">
                                        {{ csrf_field() }}
                                        <div class="form-group d-flex align-items-center justify-content-between">
                                            <label for="exampleInputEmail1" class="text-white">Nom</label>
                                            <input type="text" class="form-control" name="lastname">
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-between">
                                            <label for="exampleInputEmail1" class="text-white">Prénom</label>
                                            <input type="text" class="form-control" name="firstname">
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-between">
                                            <label for="exampleInputEmail1" class="text-white">Adresse email</label>
                                            <input type="email" class="form-control" name="email">
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-between">
                                            <label for="exampleInputEmail1" class="text-white">Mot de passe</label>
                                            <input type="password" class="form-control" name="password">
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-between">
                                            <label for="exampleInputEmail1" class="text-white">Confirmation du mot de
                                                                                               passe</label>
                                            <input type="password" class="form-control" name="password_confirmation">
                                        </div>
                                        <div class="form-group d-flex flex-column align-items-center justify-content-between">
                                            {{--<label for="exampleInputEmail1" class="text-white">Nom</label>--}}
                                            {{--<input type="text" class="form-control">--}}
                                            @if(Session::has('errors'))
                                                @if ($errors->has('password'))
                                                    <span class="co help-block text-danger">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                                @endif
                                                @if ($errors->has('email'))
                                                    <span class="co help-block text-danger">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                                @endif
                                                @if ($errors->has('firstname'))
                                                    <span class="co help-block text-danger">
                                                    <strong>{{ $errors->first('firstname') }}</strong>
                                                </span>
                                                @endif
                                                @if ($errors->has('lastname'))
                                                    <span class="co help-block text-danger">
                                                    <strong>{{ $errors->first('lastname') }}</strong>
                                                </span>
                                                @endif
                                            @endif
                                            <button class="classic-btn inscri text-center">Inscription</button>
                                        </div>
                                    </form>
                                </div>
                            @else
                                
                                <form action="{{ action('App\StaticsController@postReservation') }}" class="row w-75"
                                      method="POST">
                                    <div class="col-md-6">
                                        <div class="form-group d-flex flex-column justify-content-center align-items-center">
                                            <label for="" class="sub-deck">
                                                Choisir une salle
                                            </label>
                                            <select name="salle[]" id="" class="form-control">
                                                @foreach($salles as $salle)
                                                    <option value="{{ $salle->id }}">{{ $salle->titre }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group d-flex flex-column justify-content-center align-items-center">
                                            <label for="" class="sub-deck">L'horraire</label>
                                            
                                            @foreach($salles as $salle)
                                                @foreach(json_decode($salle->horraire) as $horraire)
                                                    @foreach($horraire as $key => $value)
                                                        {{ dd($value) }}
                                                        <option value="{{ $salle->id }}">{{ $value }}</option>
                                                    @endforeach
                                                @endforeach
                                            @endforeach
                                        </div>
                                    </div>
                                </form>
                            @endif
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
        $(document).ready(function () {
            $('select').select2()
        });
    </script>
@stop