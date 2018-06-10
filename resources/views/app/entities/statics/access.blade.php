@extends('app')


@section('css')
@stop
{{--AIzaSyCo-AL2nTHl1mjuC21rbtfillHlQF8XBHA--}}

@section('content')
    <div class="page-content">
        @include('app.partials.sidebar')
        <div class="content-page">
            <div class="home acces pt-5">
                <div class="container-fluid px-0 mx-0">
                    <div class="row">
                        <div class="col d-flex flex-column align-items-center w-50 justify-content-center first-section">
                            <h1>{!! getTexts('access-first-title') !!}</h1>
                            <p class="sub-deck">
                                {!! getTexts('access-sub-title') !!}
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="itm-metro d-flex flex-column align-items-center justify-content-start">
                                <h3 class="text-center font-weight-bold mb-5">{!! getTexts('access-adresse') !!}</h3>
                                <div class="w-100 mb-2 justify-content-center d-flex align-items-center">
                                    <img src="{{ asset('images/metro-1.png') }}" alt="" class="mr-5">
                                    <span>{!! getTexts('access-first-stop') !!}</span>
                                </div>
                                <div class="w-100 mb-2 justify-content-center d-flex align-items-center">
                                    <img src="{{ asset('images/metro-2.png') }}" alt="" class="mr-5">
                                    <span>{!! getTexts('access-second-stop') !!}</span>
                                </div>
                                <div class="w-100 mb-2 justify-content-center d-flex align-items-center">
                                    <img style="margin-left: 70px !important;" src="{{ asset('images/metro-3.png') }}" alt="" class="mr-5">
                                    <span>{!! getTexts('access-third-stop') !!}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex flex-column align-items-center justify-content-center first-section">
                            <div class="" id="map">
                                {{--<iframe--}}
                                        {{--width="600"--}}
                                        {{--height="450"--}}
                                        {{--frameborder="0" style="border:0"--}}
                                        {{--src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCo-AL2nTHl1mjuC21rbtfillHlQF8XBHA&q=" allowfullscreen>--}}
                                {{--</iframe>--}}
                                <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2622.8514311742138!2d2.2546613158014823!3d48.8991685057884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e665a01421f951%3A0x2b79a117e4a2485f!2s1+Boulevard+Aristide+Briand%2C+92400+Courbevoie!5e0!3m2!1sfr!2sfr!4v1528641382727" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('app.partials.content-page',[$articles])
        </div>
    </div>
@stop

@section('js')
@stop