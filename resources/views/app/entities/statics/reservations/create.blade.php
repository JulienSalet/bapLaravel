@extends('app')


@section('css')
    <link href="{{ asset('pages-assets/plugins/bootstrap-datepicker/css/datepicker3.css') }}" rel="stylesheet"
          type="text/css"
          media="screen">
    <link href="{{ asset('pages-assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet"
          type="text/css"
          media="screen">
    <link href="{{ asset('pages-assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet"
          type="text/css"
          media="screen">
    <link media="screen" type="text/css" rel="stylesheet"
          href="{{ asset('pages-assets/plugins/bootstrap-datepicker/css/datepicker3.css') }}">
    <link href="{{ asset('pages-assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet"
          type="text/css" media="screen">
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
                                          class="col-md-6 d-flex flex-column" method="POST">
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
                                    {{ csrf_field() }}
                                    <div class="col-md-6">
                                        <div class="form-group d-flex flex-column justify-content-center align-items-center">
                                            <label for="" class="sub-deck">
                                                Choisir une salle
                                            </label>
                                            <select name="salle" id="" class="form-control">
                                                @foreach($salles as $salle)
                                                    <option value="{{ $salle->id }}">{{ $salle->titre }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group d-flex flex-column justify-content-center align-items-center">
                                            <label for="" class="sub-deck">L'horraire</label>
                                            <div class="d-flex flex-column justify-content-center align-items-start">
                                                <input type="text" id="datepicker" name="date" class="ml-3 mb-3 w-100 form-control" placeholder="Date de la reservation">
                                                <div class="ml-3 w-100 d-flex align-items-center justify-content-around">
                                                    <div class="input-group-addon sub-deck px-2">De </div>
                                                    {{--@foreach($salles as $salle)--}}
                                                    {{--@foreach(json_decode($salle->horraire) as $horraire)--}}
                                                    {{--@foreach($horraire as $key => $value)--}}
                                                    {{--<option value="{{ $salle->id }}">{{ $value }}</option>--}}
                                                    {{--@endforeach--}}
                                                    {{--@endforeach--}}
                                                    {{--@endforeach--}}
                                                    <input type="text" class="time form-control"
                                                           name="horaire[start_time]"
                                                           value="10:00" value="">
                                                    <div class="input-group-addon sub-deck px-2">A</div>
                                                    <input type="text" class="time form-control"
                                                           name="horaire[end_time]"
                                                           value="22:00">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-100 d-flex justify-content-center align-items-center">
                                        <button type="submit" class="btn">Prendre réservation</button>
                                    </div>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @include('app.partials.content-page',[$articles])
        </div>
    </div>
@stop

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script type="text/javascript"
            src="{{ asset('pages-assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('pages-assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('pages-assets/plugins/classie/classie.js') }}" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            $('select').select2()
            let months = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
            // DATEPICKER - Documentation : http://bootstrap-datepicker.readthedocs.io/en/latest/index.html
            $.fn.datepicker.dates['fr'] = {
                days: ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"],
                daysShort: ["Dim", "Lun", "Mar", "Mer", "Jeu", "Ven", "Sam"],
                daysMin: ["D", "L", "M", "M", "J", "V", "S"],
                months: months,
                monthsShort: ["Janv", "Févr", "Mars", "Avr", "Mai", "Juin", "Juill", "Août", "Sept", "Oct", "Nov", "Déc"],
                today: "Aujourd'hui",
                clear: "Clear",
                format: "dd/mm/yyyy",
                titleFormat: "MM yyyy", /* Leverages same syntax as 'format' */
                weekStart: 1
            };
            $('#datepicker').datepicker({
                format: 'dd/mm/yyyy', // FORMAT - Documentation : http://bootstrap-datepicker.readthedocs.io/en/latest/options.html#format
                language: 'fr',
                todayHight: true
            });
            $( '.time' ).timepicker( {
                showMeridian: false,
                minuteStep: 60
            } ).on( 'show.timepicker', function (e) {
                var widget = $( '.bootstrap-timepicker-widget' );
                widget.find( '.glyphicon-chevron-up' ).removeClass().addClass( 'pg-arrow_maximize' );
                widget.find( '.glyphicon-chevron-down' ).removeClass().addClass( 'pg-arrow_minimize' );
            } );
        });
    </script>
@stop