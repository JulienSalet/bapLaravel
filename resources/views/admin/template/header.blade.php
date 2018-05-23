<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta charset="utf-8"/>
    
    <title>{{ env('APP_NAME') }} - Administration</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link href="{{ asset('pages-assets/plugins/pace/pace-theme-flash.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('pages-assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('pages-assets/plugins/font-awesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('pages-assets/plugins/jquery-scrollbar/jquery.scrollbar.css') }}" rel="stylesheet" type="text/css" media="screen">
    <link href="{{ asset('pages-assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" media="screen">
    <link href="{{ asset('pages-assets/plugins/switchery/css/switchery.min.css') }}" rel="stylesheet" type="text/css" media="screen">
    <link href="{{ asset('pages-assets/plugins/nvd3/nv.d3.min.css') }}" rel="stylesheet" type="text/css" media="screen">
    <link href="{{ asset('pages-assets/plugins/mapplic/css/mapplic.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('pages-assets/plugins/rickshaw/rickshaw.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('pages-assets/pages/css/pages-icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('pages-assets/css/custom.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('pages-assets/plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('pages-assets/plugins/jquery-menuclipper/jquery.menuclipper.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('pages-assets/plugins/jquery-datatable/media/css/dataTables.bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('pages-assets/plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('pages-assets/plugins/datatables-responsive/css/datatables.responsive.css') }}" rel="stylesheet" type="text/css" media="screen">
    <link href="{{ asset('pages-assets/plugins/jquery-metrojs/MetroJs.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('pages-assets/plugins/codrops-dialogFx/dialog.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('pages-assets/plugins/codrops-dialogFx/dialog-sandra.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('pages-assets/plugins/owl-carousel/assets/owl.carousel.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('pages-assets/plugins/jquery-nouislider/jquery.nouislider.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('plugins/ckeditor/css/samples.css') }}" rel="stylesheet" type="text/css">
    <link type="text/css" rel="stylesheet" href="{{ asset('pages-assets/plugins/bootstrap-tag/bootstrap-tagsinput.css') }}">
    <link href="{{ asset('plugins/ckeditor/toolbarconfigurator/lib/codemirror/neo.css') }}" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="{{ asset('pages-assets/pages/css/themes/corporate.css') }}" rel="stylesheet" type="text/css">
    @yield('css')
    <style>
        .content{
        
        }
    </style>
</head>
<body class="fixed-header menu-pin menu-behind pace-done">