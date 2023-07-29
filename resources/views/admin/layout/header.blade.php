<div class="page-header">
    <div class="header-wrapper m-0">
        <div class="header-logo-wrapper p-0">
            <div class="logo-wrapper">
                <a href="{{route('dashboard')}}">
                    {{-- <img class="img-fluid main-logo" src="{{asset('admin/assets/images/logo/1.png')}}" alt="logo">
                    <img class="img-fluid white-logo" src="{{asset('admin/assets/images/logo/1-white.png')}}" alt="logo"> --}}
                    Jendol
                </a>
            </div>
            <div class="toggle-sidebar">
                <i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
                <a href="{{route('dashboard')}}">
                    {{-- <img src="{{asset('admin/assets/images/logo/1.png')}}" class="img-fluid" alt=""> --}}
                    Jendol
                </a>
            </div>
        </div>

        <form class="form-inline search-full" action="{{route('search')}}" method="get">
            <div class="form-group w-100">
                <div class="Typeahead Typeahead--twitterUsers">
                    <div class="u-posRelative">
                        <input class="demo-input  form-control-plaintext w-100" type="text"
                            placeholder="Search Batch Number" name="q" title="" autofocus>
                        <i class="close-search" data-feather="x"></i>
                        <div class="spinner-border Typeahead-spinner" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                    <div class="Typeahead-menu"></div>
                </div>
            </div>
        </form>
        <div class="nav-right col-6 pull-right right-header p-0">
            <ul class="nav-menus">
                <li>
                    <span class="header-search">
                        <i class="ri-search-line"></i>
                    </span>
                </li>
                <li class="onhover-dropdown">
                    <div class="notification-box">
                        <i class="ri-notification-line"></i>
                        <span class="badge rounded-pill badge-theme">4</span>
                    </div>
                </li>

                <li>
                    <div class="mode">
                        <i class="ri-moon-line"></i>
                    </div>
                </li>
                <li class="profile-nav onhover-dropdown pe-0 me-0">
                    <div class="media profile-media">
                        <img class="user-profile rounded-circle" src="{{asset('admin/assets/images/users/4.jpg')}}" alt="">
                        <div class="user-name-hide media-body">
                            <span>{{auth()->user()->name}}</span>
                            <p class="mb-0 font-roboto">{{auth()->user()->role}}<i class="middle ri-arrow-down-s-line"></i></p>
                        </div>
                    </div>
                    <ul class="profile-dropdown onhover-show-div">
                        <li>
                            <a href="{{route('setting.index')}}">
                                <i data-feather="settings"></i>
                                <span>Settings</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('logout')}}">
                                <i data-feather="log-out"></i>
                                <span>Log out</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
