<nav class="page-sidebar" data-pages="sidebar">
    <div class="sidebar-header">
        <a href="">
           {{--<img src="{{ asset('pages-assets/img/logo_white.png') }}" alt="logo" class="brand"--}}
                 {{--data-src="{{ asset('pages-assets/img/logo_white.png') }}"--}}
                 {{--data-src-retina="{{ asset('pages-assets/img/logo_white_2x.png') }}" width="78" height="22">--}}
        </a>
    </div>
    <div class="sidebar-menu">
        <ul class="menu-items">
            <li class="m-t-30">
                <a href="">
                    <span class="title">Home</span>
                </a>
                <span class="bg-success icon-thumbnail">
                    <i class="pg-home"></i>
                </span>
            </li>
            <li>
                <a href="javascript:;">
                    <span class="title">Utilisateurs</span>
                    <span class="arrow"></span>
                </a>
                <span class="icon-thumbnail">
                    <i class="fa fa-user"></i>
                </span>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ action('Admin\Cms\UsersController@index') }}">Tout les utilisateurs</a>
                        <span class="icon-thumbnail">utls</span>
                    </li>
                    {{--<li>--}}
                        {{--<a href="">Second Lien</a>--}}
                        {{--<span class="icon-thumbnail">rls</span>--}}
                    {{--</li>--}}
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <span class="title">Pages</span>
                    <span class="arrow"></span>
                </a>
                <span class="icon-thumbnail">
                    <i class="fa fa-user"></i>
                </span>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ action('Admin\Cms\PagesController@create') }}">Ajouter une page</a>
                        <span class="icon-thumbnail">pgs</span>
                    </li>
                    <li>
                        <a href="{{ action('Admin\Cms\PagesController@index') }}">Toutes les pages</a>
                        <span class="icon-thumbnail">pgs</span>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <span class="title">Blog</span>
                    <span class="arrow"></span>
                </a>
                <span class="icon-thumbnail">
                    <i class="fa fa-user"></i>
                </span>
                <ul class="sub-menu">
                    <li class="">
                        <a href="javascript:;" class="w-100"><span class="title">Post</span>
                            <span class="arrow"></span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{ action('Admin\Cms\Blog\PostController@create') }}">Ajouter un article</a>
                                <span class="icon-thumbnail">pgs</span>
                            </li>
                            <li>
                                <a href="{{ action('Admin\Cms\Blog\PostController@index') }}">Tout les articles</a>
                                <span class="icon-thumbnail">pgs</span>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="javascript:;" class="w-100"><span class="title">Categorie</span>
                            <span class="arrow"></span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{ action('Admin\Cms\Blog\CategoriesController@create') }}">Ajouter une categorie</a>
                                <span class="icon-thumbnail">pgs</span>
                            </li>
                            <li>
                                <a href="{{ action('Admin\Cms\Blog\CategoriesController@index') }}">Toutes les categories</a>
                                <span class="icon-thumbnail">pgs</span>
                            </li>
                        </ul>
                    </li>
                </ul>
                
            </li>
            <li>
                <a href="javascript:;">
                    <span class="title">Salle</span>
                    <span class="arrow"></span>
                </a>
                <span class="icon-thumbnail">
                    <i class="fa fa-user"></i>
                </span>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ action('Admin\Cms\SalleController@create') }}">Ajouter une salle</a>
                        <span class="icon-thumbnail">pgs</span>
                    </li>
                    <li>
                        <a href="{{ action('Admin\Cms\SalleController@index') }}">Toutes les salles</a>
                        <span class="icon-thumbnail">pgs</span>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <span class="title">Réservations</span>
                    <span class="arrow"></span>
                </a>
                <span class="icon-thumbnail">
                    <i class="fa fa-user"></i>
                </span>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ action('Admin\Cms\ReservationsController@index') }}">Toutes les réservations</a>
                        <span class="icon-thumbnail">pgs</span>
                    </li>
                </ul>
            </li>
            {{--//GROUP QUESTION--}}
            {{--<li>--}}
                {{--<a href="javascript:;">--}}
                    {{--<span class="title">Multi Menu</span>--}}
                    {{--<span class="arrow"></span>--}}
                {{--</a>--}}
                {{--<span class="icon-thumbnail">--}}
                    {{--<i class="fa fa-user"></i>--}}
                {{--</span>--}}
                {{----}}
                {{--<ul class="sub-menu">--}}
                    {{--<li class="">--}}
                        {{--<a href="javascript:;" class="w-100"><span class="title">Sub Menu</span>--}}
                            {{--<span class="arrow"></span></a>--}}
                        {{--<ul class="sub-menu" style="display: none;">--}}
                            {{--<li>--}}
                                {{--<a href="">Sub First Link</a>--}}
                                {{--<span class="icon-thumbnail">Sm</span>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="">Sub Second Link</a>--}}
                                {{--<span class="icon-thumbnail">Sm</span>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
        </ul>
        <div class="clearfix"></div>
    </div>
</nav>