<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>{{ isset($page) && $page->seo_title ? $page->seo_title : '' }}</title>
    <meta name="description" content="{{ isset($page) && $page->seo_description ? $page->seo_description : '' }}">
    <meta name="author" content="devglrd.com{{-- isset($page) && $page->url ? $page->url : '' --}}">
    <meta property="og:title" content="{{ isset($page) && $page->og_title ? $page->og_title : '' }}"/>
    <meta property="og:description" content="{{ isset($page) && $page->og_description ? $page->og_description : '' }}"/>
    <meta property="og:image" content="{{ isset($page) && $page->og_image ? $page->getOgImage->file : '' }}"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="{{ \URL::current() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('css')
</head>
<body class="@yield('bodyClass')">
