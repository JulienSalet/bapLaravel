@extends('admin')

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
@stop
@section('js')
    <script>
        $(document).ready(function () {
            $('select').select2();
        });

        $('[name="seo_title"]').on('keyup', function () {
            var max = 70;
            var current = $(this).val().length;
            var remaining = max - current;
            if (remaining < 30 && remaining > 0) {
                $('#remainingSeoTitle')
                .addClass('text-complete').removeClass('text-danger').removeClass('text-primary')
            }
            else if (remaining <= 0) {
                $('#remainingSeoTitle')
                .addClass('text-danger').removeClass('text-primary').removeClass('text-complete')
            } else {
                $('#remainingSeoTitle')
                .addClass('text-primary').removeClass('text-complete').removeClass('text-danger')
            }
            $('#remainingSeoTitle .count').text(remaining);
            $('[data-text="seo-title"]').text($(this).val())
        })
        $('[name="seo_description"]').on('keyup', function () {
            var max = 160;
            var current = $(this).val().length;
            var remaining = max - current;
            if (remaining < 50 && remaining > 0) {
                $('#remainingSeoDescription')
                .addClass('text-complete').removeClass('text-danger').removeClass('text-primary')
            }
            else if (remaining <= 0) {
                $('#remainingSeoDescription')
                .addClass('text-danger').removeClass('text-primary').removeClass('text-complete')
            } else {
                $('#remainingSeoDescription')
                .addClass('text-primary').removeClass('text-complete').removeClass('text-danger')
            }
            $('#remainingSeoDescription .count').text(remaining);
            $('[data-text="seo-description"]').text($(this).val())
        })
        $('[name="og_title"]').on('keyup', function () {
            var max = 70;
            var current = $(this).val().length;
            var remaining = max - current;
            if (remaining < 30 && remaining > 0) {
                $('#remainingOgTitle')
                .addClass('text-complete').removeClass('text-danger').removeClass('text-primary')
            }
            else if (remaining <= 0) {
                $('#remainingOgTitle')
                .addClass('text-danger').removeClass('text-primary').removeClass('text-complete')
            } else {
                $('#remainingOgTitle')
                .addClass('text-primary').removeClass('text-complete').removeClass('text-danger')
            }
            $('#remainingOgTitle .count').text(remaining);
            $('[data-text="og-title"]').text($(this).val())
        })
        $('[name="og_description"]').on('keyup', function () {
            var max = 160;
            var current = $(this).val().length;
            var remaining = max - current;
            if (remaining < 50 && remaining > 0) {
                $('#remainingOgDescription')
                .addClass('text-complete').removeClass('text-danger').removeClass('text-primary')
            }
            else if (remaining <= 0) {
                $('#remainingOgDescription')
                .addClass('text-danger').removeClass('text-primary').removeClass('text-complete')
            } else {
                $('#remainingOgDescription')
                .addClass('text-primary').removeClass('text-complete').removeClass('text-danger')
            }
            $('#remainingOgDescription .count').text(remaining);
            $('[data-text="og-description"]').text($(this).val())
        })
    </script>
@stop

@section('content')
    <div class="content sm-gutter">
        <div class="container-fluid container-fixed-lg">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ action('Admin\DashboardController@dashboard') }}">Tableau de bord</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ action('Admin\Cms\Blog\PostController@index') }}">Tout les articles</a>
                </li>
                <li class="breadcrumb-item active">Ajouter une salle</li>
            </ol>
            <form action="{{ action('Admin\Cms\SalleController@update', $salle) }}" method="POST"
                  data-toggle="validator"
                  enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('put') }}
                <div class="row">
                    <div class="col-xl-8 col-lg-8 ">
                        <div class="card card-white">
                            <div class="card-header">
                                <div class="card-title">
                                    Ajouter une salle
                                </div>
                            </div>
                            <div class="card-block">
                                <div class="row clearfix">
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }} form-group-default required"
                                             aria-required="true">
                                            <label>Titre de la salle</label>
                                            <input type="text" class="form-control" name="title"
                                                   value="{{ $salle->titre }}"
                                                   placeholder="Titre de la salle"
                                                   required>
                                            @if ($errors->has('title'))
                                                <div class="help-block">
                                                    <strong>{{ $errors->first('title') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('numero_salle') ? 'has-error' : '' }} form-group-default required"
                                             aria-required="true">
                                            <label>Numero de la salle</label>
                                            <input type="number" class="form-control" name="numero_salle"
                                                   value="{{ $salle->numero_salle }}"
                                                   placeholder="Numero de la salle"
                                                   required>
                                            @if ($errors->has('numero_salle'))
                                                <div class="help-block">
                                                    <strong>{{ $errors->first('numero_salle') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('nb_people') ? 'has-error' : '' }} form-group-default required"
                                             aria-required="true">
                                            <label>Nombre de personne max de la salle</label>
                                            <input type="number" class="form-control" name="nb_people"
                                                   value="{{ $salle->nb_people }}"
                                                   placeholder="Nombre de personne "
                                                   required>
                                            @if ($errors->has('nb_people'))
                                                <div class="help-block">
                                                    <strong>{{ $errors->first('nb_people') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('horraire') ? 'has-error' : '' }} form-group-default required"
                                             aria-required="true">
                                            <label>Horraire de la salle</label>
                                            <input type="number" class="form-control" name="horraire"
                                                   value="{{ $salle->horraire }}"
                                                   placeholder="Horraire de la salle"
                                                   required>
                                            @if ($errors->has('horraire'))
                                                <div class="help-block">
                                                    <strong>{{ $errors->first('horraire') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group {{ $errors->has('content') ? 'has-error' : '' }} form-group-default required"
                                             aria-required="true">
                                            <label>Image de la salle</label>
                                            <input type="file" class="form-control file" name="file"
                                                   value="{{ $salle->file }}">
                                            @if ($errors->has('content'))
                                                <div class="help-block">
                                                    <strong>{{ $errors->first('content') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group {{ $errors->has('content') ? 'has-error' : '' }} form-group-default required"
                                             aria-required="true">
                                            <label>Description de la salle</label>
                                            <textarea type="text" class="form-control editor" name="content"
                                                      placeholder="Description de l'article">{{ $salle->content }}</textarea>
                                            @if ($errors->has('content'))
                                                <div class="help-block">
                                                    <strong>{{ $errors->first('content') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-white">
                            <div class="card-header ">
                                <div class="card-title">
                                    Photo acutelle
                                </div>
                            </div>
                            <div class="card-block">
                                <img src="{{ $salle->getFile->file }}" width="300px" alt="">
                            </div>
                        </div>
                        <div class="card card-transparent">
                            <div class="card-header ">
                                <div class="card-title">
                                    Validation
                                </div>
                            </div>
                            <div class="card-block">
                                <h3>
                                    Modifier
                                </h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis debitis dicta,
                                    eaque hic impedit ipsam non quia quo repellat sint? Exercitationem fuga illo minima
                                    molestiae quaerat quidem repellat, similique veniam!
                                </p>
                                <br>
                                <button type="submit" class="btn btn-primary btn-cons">
                                    Modifier la salle numero {{ $salle->numero_salle }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop

