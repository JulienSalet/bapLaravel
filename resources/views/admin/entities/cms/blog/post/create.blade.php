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
                <li class="breadcrumb-item active">Ajouter un article</li>
            </ol>
            <form action="{{ action('Admin\Cms\Blog\PostController@store') }}" method="POST"
                  data-toggle="validator"
                  enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-xl-8 col-lg-8 ">
                        <div class="card card-white">
                            <div class="card-header">
                                <div class="card-title">
                                    Ajouter un article
                                </div>
                            </div>
                            <div class="card-block">
                                <div class="row clearfix">
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }} form-group-default required"
                                             aria-required="true">
                                            <label>Titre de l'article</label>
                                            <input type="text" class="form-control" name="title"
                                                   value="{{ old('title') }}"
                                                   placeholder="Titre de la page"
                                                   required>
                                            @if ($errors->has('title'))
                                                <div class="help-block">
                                                    <strong>{{ $errors->first('title') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('subtitle') ? 'has-error' : '' }} form-group-default"
                                             aria-required="true">
                                            <label>Sous titre de l'article</label>
                                            <input type="text" class="form-control" name="subtitle"
                                                   value="{{ old('subtitle') }}"
                                                   placeholder="Sous titre de la page">
                                            @if ($errors->has('subtitle'))
                                                <div class="help-block">
                                                    <strong>{{ $errors->first('subtitle') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group {{ $errors->has('categories') ? 'has-error' : '' }} form-group-default required"
                                             aria-required="true">
                                            <div class="d-flex align-items-center">
                                                <label>Categorie de l'article</label> <a
                                                        href="{{ action('Admin\Cms\Blog\CategoriesController@create') }}"
                                                        style="font-size: 12px" class=" text-success">Ajouter une
                                                                                                      categorie</a>
                                            </div>
                                            <select name="categories[]" id="" multiple class="form-control select2">
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('categories'))
                                                <div class="help-block">
                                                    <strong>{{ $errors->first('categories') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('file') ? 'has-error' : '' }} form-group-default required"
                                             aria-required="true">
                                            <label>Image de l'article</label>
                                            <input type="file" class="form-control" name="file" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('status') ? 'has-error' : '' }} form-group-default required"
                                             aria-required="true">
                                            <div class="d-flex align-items-center">
                                                <label>Status de l'article</label>
                                            </div>
                                            <select name="status" id="" class="form-control select2">
                                                <option value="1">Publié</option>
                                                <option value="0">Non Publié</option>
                                            </select>
                                            @if ($errors->has('status'))
                                                <div class="help-block">
                                                    <strong>{{ $errors->first('status') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                        <div class="form-group {{ $errors->has('excerpt') ? 'has-error' : '' }} form-group-default required"
                                             aria-required="true">
                                            <label>Petite excerpt de l'article</label>
                                            <textarea type="text" class="form-control editor" name="excerpt"
                                                      placeholder="Description de l'article">{{ old('excerpt') }}</textarea>
                                            @if ($errors->has('excerpt'))
                                                <div class="help-block">
                                                    <strong>{{ $errors->first('excerpt') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group {{ $errors->has('content') ? 'has-error' : '' }} form-group-default required"
                                             aria-required="true">
                                            <label>Contenue de l'article</label>
                                            <textarea type="text" class="form-control editor" name="content"
                                                      placeholder="Contenue de l'article">{{ old('content') }}</textarea>
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
                        <div class="card card-transparent">
                            <div class="card-header ">
                                <div class="card-title">
                                    Validation
                                </div>
                            </div>
                            <div class="card-block">
                                <h3>
                                    Ajouter un article
                                </h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis debitis dicta,
                                    eaque hic impedit ipsam non quia quo repellat sint? Exercitationem fuga illo minima
                                    molestiae quaerat quidem repellat, similique veniam!
                                </p>
                                <br>
                                <button type="submit" class="btn btn-primary btn-cons">
                                    Ajouter un article
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop

