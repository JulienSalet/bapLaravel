@extends('app')


@section('css')
    <link rel="stylesheet" href="login.css">
@stop

@section('content')
    <div class="page-content home">
        @include('app.partials.sidebar')
        <div class="content-page">
            <div class="home">
                <div class="container-fluid px-0 mx-0">
                    <div class="row">
                        <div class="col d-flex flex-column align-items-center w-50 justify-content-center first-section">
                            <h1>{!! getTexts('home-first-section-head-title') !!}</h1>
                            <p class="sub-deck text-center">
                                {!! getTexts('home-first-section-desc')  !!}
                            </p>
                            <button class="mt-5 classic-btn">{!! getTexts("home-second-section-first-block") !!}</button>
                        </div>
                    </div>
                </div>
            </div>
            @include('app.partials.content-page')
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