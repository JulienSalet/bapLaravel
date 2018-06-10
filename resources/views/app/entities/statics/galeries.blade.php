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
            @include('app.partials.content-page',[$articles])
        </div>
    </div>
@stop

@section('js')
@stop