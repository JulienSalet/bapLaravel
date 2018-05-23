<div class="page-container">
    <div class="header">
        <a href="#" class="btn-link toggle-sidebar hidden-lg-up pg pg-menu" data-toggle="sidebar"></a>
        <div class="">
            <div class="brand inline m-l-10">
                <a href="{{ action('Admin\DashboardController@dashboard') }}">
                </a>
            </div>
        </div>
        
        <div class="d-flex align-items-center">
            <div class="pull-left p-r-10 fs-14 font-heading hidden-md-down">
                <span class="semi-bold">
                    {{ Auth::user()->name }}
                </span>
            </div>
            <div class="dropdown pull-right hidden-md-down">
                <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                    <span class="thumbnail-wrapper d32 circular inline">
                      <img src="{{ asset('pages-assets/img/profiles/avatar.jpg') }}" alt=""
                           data-src="{{ asset('pages-assets/img/profiles/avatar.jpg') }}"
                           data-src-retina="{{ asset('pages-assets/img/profiles/avatar_small2x.jpg') }}" width="32"
                           height="32">
                    </span>
                </button>
                
                <div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu">
                    <a href="#" class="dropdown-item">
                        <i class="pg-settings_small"></i>
                        Settings
                    </a>
                    <a href="#resetPassword" data-toggle="modal" class="dropdown-item">
                        Modifier mon mot de passe
                    </a>
                    <a href="{{ action('Admin\Auth\LoginController@logout') }}" class="clearfix bg-master-lighter dropdown-item">
                        <span class="pull-left">Deconnexion</span>
                        <span class="pull-right">
                            <i class="pg-power"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content-wrapper full-height">