@extends('app')


@section('css')
@stop

@section('content')
    <div class="">
        <div class="sidebar">
            <div class="content-sidebar d-flex flex-column justify-content-center align-items-center">
                <div class="mt-4">
                    <img src="{{ asset('images/icons/compass.png') }}" alt="">
                </div>
                <div class="mt-4">
                    <img src="{{ asset('images/icons/compass.png') }}" alt="">
                </div>
                <div class="mt-4">
                    <img src="{{ asset('images/icons/compass.png') }}" alt="">
                </div>
                <div class="mt-4">
                    <img src="{{ asset('images/icons/compass.png') }}" alt="">
                </div>
                <div class="mt-4">
                    <img src="{{ asset('images/icons/compass.png') }}" alt="">
                </div>
                <div class="mt-4">
                    <img src="{{ asset('images/icons/compass.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="content-page">
            <div class="home temoignages">
                <div class="container-fluid px-0 mx-0">
                    <div class="row">
                        <div class="col d-flex flex-column align-items-center w-50 justify-content-center first-section">
                            <h1 class="mb-0">Logement</h1>
                            <div class="d-flex p-5 flex-column justify-content-around align-items-center">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut massa a eros
                                    pharetra aliquam. Vivamus sit amet lacinia metus, vel pellentesque ex. Proin
                                    finibus, nulla ac luctus luctus, ex eros accumsan enim, sed sollicitudin mauris diam
                                    tincidunt urna. Donec rhoncus eleifend ante, quis posuere risus ultrices at. Ut ut
                                    risus neque. Nulla ac malesuada diam. In a faucibus augue, vitae tempus odio. Aenean
                                    augue orci, pulvinar eget tellus sit amet, tristique blandit urna. Duis rutrum est
                                    odio. Quisque iaculis sit amet massa sed iaculis. Mauris varius semper velit sit
                                    amet maximus.
                                </p>
                                <p>
                                    Aliquam erat volutpat. Praesent lacus eros, condimentum sit amet massa eu, sagittis
                                    maximus augue. Cras massa felis, cursus non justo et, dapibus volutpat sapien. Sed
                                    in tellus nec dolor tincidunt semper. Interdum et malesuada fames ac ante ipsum
                                    primis in faucibus. Ut justo nisi, maximus ut varius iaculis, volutpat id nulla.
                                    Nunc vel risus nibh. Proin arcu diam, pulvinar sit amet ipsum id, feugiat finibus
                                    sem. Morbi ornare sem sit amet lacus consectetur, id ultricies lectus rhoncus. Donec
                                    aliquam pretium posuere. Praesent ac erat at risus dignissim elementum. Vestibulum
                                    lacinia nec urna non tempor.
                                </p>
                                <p>
                                    Suspendisse eu gravida quam, vitae vulputate ante. Ut porta vel nunc non lobortis.
                                    Nulla congue arcu tellus, sed rhoncus risus commodo a. Duis nibh nunc, posuere ut
                                    laoreet et, sollicitudin nec purus. Nulla suscipit vitae nisl eget aliquam. Nullam
                                    vitae mi eu mauris aliquet convallis. Donec sed eleifend est, et vulputate sapien.
                                    Phasellus vulputate metus nec enim posuere lobortis. Nunc faucibus risus eu velit
                                    auctor rhoncus.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="second-section mt-4 ml-2">
                <div class="d-flex h-50">
                    <div class="block article-1">
                        <h2>Article 1</h2>
                        <button class="mt-1 classic-btn">En savoir plus</button>
                    </div>
                    <div class="block maternelle-1">
                        <span>News</span>
                        <h2 class="text-center">Réhabilitation d'une maternelle</h2>
                        <button class="mt-1 classic-btn">En savoir plus</button>
                    </div>
                </div>
                <div class="d-flex h-50 mt-4">
                    <div class="block article-2">
                        <h2>Article 2</h2>
                        <button class="mt-1 classic-btn">En savoir plus</button>
                    </div>
                    <div class="block info">
                        <h2 class="text-center">Info pratiques</h2>
                        <div class="d-flex flex-column">
                            <span>Horaires :</span>
                            <span>Lundi - Vendredi : <strong>9h - 22H</strong></span>
                            <span class="decal">Samedi : <strong>10h - 20H</strong></span>
                        </div>
                    </div>
                </div>
                <div class="d-flex h-50 mt-4">
                    <div class="block article-3">
                        <h2>Article 3</h2>
                        <button class="mt-1 classic-btn">En savoir plus</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
@stop