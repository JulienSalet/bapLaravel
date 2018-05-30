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
                            Salle
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
                                        Salle
                                    </div>
                                </div>
                                <div class="card-block">
                                    <h3>Ajouter, modifier, supprimer une salle</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto cupiditate
                                        delectus enim iusto laborum magni necessitatibus non, officiis quae quia quo
                                        repudiandae similique sunt. Accusantium alias atque delectus deleniti, nisi
                                        obcaecati odit provident repellendus saepe sint sunt tenetur! Consequatur, vero?
                                    </p>
                                    {{--@permission('create-cms-events')--}}
                                    <a href="{{ action('Admin\Cms\SalleController@create') }}"
                                       class="btn btn-primary btn-cons m-t-10">
                                        Ajouter une salle
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
                            <th>Titre de la sallle</th>
                            <th>Numero de la salle</th>
                            <th>Nombre de personne max</th>
                            <th>Horraire d'ouverture / fermeture</th>
                            <th style="width:20%">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($salles AS $key => $salle)
                            <tr>
                                <td style="width:10%;" class="v-align-middle">
                                    {{ $key+1 }}
                                </td>
                                <td class="v-align-middle semi-bold">
                                    {{ $salle->titre ? $salle->titre : '—' }}
                                </td>
                                <td class="v-align-middle semi-bold">
                                    {{ $salle->numero_salle ? $salle->numero_salle : '—' }}
                                </td>
                                <td class="v-align-middle semi-bold">
                                    {{ $salle->nb_people ? $salle->nb_people : '—' }}
                                </td>
                                <td class="v-align-middle semi-bold">
                                    <a href="#" class="btn btn-primary" data-toggle="modal"
                                       data-target="#exampleModalLong-{{ $key }}">Voir les horraires</a>
                                </td>
                                <td style="display: flex;" class="v-align-middle">
                                    <a href="{{ action('Admin\Cms\SalleController@edit', $salle->id) }}"
                                       class="btn btn-primary mr-3">
                                        Modifier
                                    </a>
                                    <form action="{{ action('Admin\Cms\SalleController@destroy', $salle->id) }}"
                                          method="POST">
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
    @foreach($salles as $key => $salle)
        <div class="modal fade" id="exampleModalLong-{{ $key }}" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Horaire de la salle
                            <strong>{{ $salle->numero_salle }}</strong></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @if($salle->horraire != null)
                            <div class="d-flex flex-column mt-3">
                                @foreach(json_decode($salle->horraire) as $day => $horraire)
                                    {{--{{ dd($day, $horraire) }}--}}
                                    <div class="d-flex flex-wrap mb-3">
                                        
                                        <span class="pr-2"><strong class="text-uppercase">{{ $day }} : </strong></span>
                                        @foreach($horraire as $key => $value)
                                            <div class="pr-2">
                                                {{ $key === 'start_time' ? "Heure d'ouverture" : "Heure de fermeture" }}
                                                : {{ $value }}
                                            </div>
                                        
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@stop