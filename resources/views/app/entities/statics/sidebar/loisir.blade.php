@extends('app')


@section('css')
@stop

@section('content')
    <div class="">
        @include('app.partials.sidebar')
        <div class="content-page">
            <div class="home acces">
                <div class="container-fluid px-0 mx-0">
                    <div class="row">
                        <h1 class="w-100 text-center">Loisir</h1>
                        <div class="col-md-6 d-flex flex-column align-items-center justify-content-center first-section">
                        </div>
                        <div class="col-md-6 d-flex flex-column align-items-center justify-content-center first-section">

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