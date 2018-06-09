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
                            <h1>{{ $article->title }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
@stop