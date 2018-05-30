@extends('admin')

@section('js')
    <script>
        {{--$( document ).ready( function () {--}}
        {{--$( '.delete' ).on( 'click', function (e) {--}}
        {{--e.preventDefault();--}}
        {{--var urlDelete = $( this ).data( 'url' );--}}
        {{--var tr        = $( this ).closest( 'tr' );--}}
        {{--swal( {--}}
        {{--title:              "{{ trans('admin/success.sure') }}",--}}
        {{--text:               "{{ trans('admin/success.noway') }}",--}}
        {{--type:               "warning",--}}
        {{--showCancelButton:   true,--}}
        {{--confirmButtonColor: "#DD6B55",--}}
        {{--confirmButtonText:  "{{ trans('admin/generics.delete') }}",--}}
        {{--cancelButtonText:   "{{ trans('admin/generics.cancel') }}"--}}
        {{--} ).then( function (isConfirm) {--}}
        {{--if ( isConfirm ) {--}}
        {{--swal( "{{ trans('admin/generics.suppression') }}", "{{ trans('admin/success.destroyUser') }}", "success" );--}}
        {{--$.ajax( {--}}
        {{--url:     urlDelete,--}}
        {{--method:  'POST',--}}
        {{--data:    {--}}
        {{--_method: 'DELETE',--}}
        {{--_token:  '{{ csrf_token() }}'--}}
        {{--},--}}
        {{--success: function () {--}}
        {{--tr.remove();--}}
        {{--}--}}
        {{--} );--}}
        {{--} else if ( isConfirm === false ) {--}}
        {{--swal( "{{ trans('admin/generics.cancellation') }}", "{{ trans('admin/success.cancelUser') }}", "error" );--}}
        {{--}--}}
        {{--} );--}}
        {{--} );--}}
        {{--} );--}}
    </script>
@stop

@section('content')
    <div class="content">
        <div class="jumbotron" data-pages="parallax">
            <div class="container-fluid container-fixed-lg sm-p-l-0 sm-p-r-0">
                <div class="inner">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ action('Admin\DashboardController@dashboard') }}">Tableau de bord</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Article
                        </li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-7 col-lg-6 ">
                            <div class="full-height">
                                <div class="card-block text-center">
                                    <img class="image-responsive-height demo-mw-600"
                                         src="{{ asset('pages-assets/img/demo/tables.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 ">
                            <div class="card card-transparent">
                                <div class="card-header ">
                                    <div class="card-title">
                                        Categorie
                                    </div>
                                </div>
                                <div class="card-block">
                                    <h3>Ajouter, modifier, supprimer une categorie</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto cupiditate
                                        delectus enim iusto laborum magni necessitatibus non, officiis quae quia quo
                                        repudiandae similique sunt. Accusantium alias atque delectus deleniti, nisi
                                        obcaecati odit provident repellendus saepe sint sunt tenetur! Consequatur, vero?
                                    </p>
                                    {{--@permission('create-cms-events')--}}
                                    <a href="{{ action('Admin\Cms\Blog\CategoriesController@create') }}"
                                       class="btn btn-primary btn-cons m-t-10">
                                        Ajouter une categorie
                                    </a>
                                    {{--@endpermission--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="container-fluid container-fixed-lg bg-white">
            <div class="card card-transparent">
                <div class="card-header ">
                    <div class="pull-right">
                        <div class="col-xs-12">
                            <input type="text" id="search-table" class="form-control pull-right"
                                   placeholder="Search">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="card-block">
                    <table class="table table-hover demo-table-search table-responsive-block" id="tableWithSearch">
                        <thead>
                        <tr>
                            <th style="width:10%;">#</th>
                            <th>Titre</th>
                            <th>Date</th>
                            <th style="width:20%">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories AS $key => $category)
                            <tr>
                                <td style="width:10%;" class="v-align-middle">
                                    {{ $key+1 }}
                                </td>
                                <td class="v-align-middle semi-bold">
                                    {{ $category->title ? $category->title : '—' }}
                                </td>
                                <td class="v-align-middle">
                                    {{ $category->created_at ? \Carbon\Carbon::parse($category->created_at)->format('m/d/Y'): '—' }}
                                </td>
                                <td style="display: flex;" class="v-align-middle">
                                    <a href="{{ action('Admin\Cms\Blog\CategoriesController@edit', $category->id) }}"
                                       class="btn btn-primary mr-3">
                                        Modifier
                                    </a>
                                    <form action="{{ action('Admin\Cms\Blog\CategoriesController@destroy', $category->id) }}" method="POST">
                                        <input type="hidden" value="DELETE" name="_method">
                                        {{ csrf_field() }}
                                        <button type="submit" class="delete btn btn btn-danger">
                                            Supprimer
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop