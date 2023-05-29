<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="{{asset('/')}}admin/assets/images/logo.svg" alt="" height="22">
                            </span>
                    <span class="logo-lg">
                                <img src="{{asset('/')}}admin/assets/images/logo-dark.png" alt="" height="17">
                            </span>
                </a>

                <a href="index.html" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="{{asset('/')}}admin/assets/images/logo-light.svg" alt="" height="22">
                            </span>
                    <span class="logo-lg">
                                <img src="{{asset('/')}}admin/assets/images/logo-light.png" alt="" height="19">
                            </span>
                </a>
            </div>

            <button type="button" class="px-3 btn btn-sm font-size-16 header-item waves-effect" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <!-- App Search-->
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="{{ __('menu.search') }}...">
                    <span class="bx bx-search-alt"></span>
                </div>
            </form>
        </div>

        <div class="d-flex">
            <div class="ml-2 dropdown d-inline-block d-lg-none">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-magnify"></i>
                </button>
                <div class="p-0 dropdown-menu dropdown-menu-lg dropdown-menu-right"
                     aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="m-0 form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="px-5 dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    
                    <span class="ml-1 d-none d-xl-inline-block">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Config::get('languages')[App::getLocale()] }}
                        </a>
                    </span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    @foreach (Config::get('languages') as $lang => $language)
                    @if ($lang != App::getLocale())
                            <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"> {{$language}}</a>
                    @endif
                @endforeach
                </div>
            </div>



            <div class="ml-1 dropdown d-none d-lg-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="bx bx-fullscreen"></i>
                </button>
            </div>

         



            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    
                    <span class="ml-1 d-none d-xl-inline-block">{{Auth::user()->name}}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a class="dropdown-item" href="#"><i class="mr-1 align-middle bx bx-user font-size-16"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i class="mr-1 align-middle bx bx-wallet font-size-16"></i> My Wallet</a>
                    <a class="dropdown-item d-block" href="#"><span class="float-right badge badge-success">11</span><i class="mr-1 align-middle bx bx-wrench font-size-16"></i> Settings</a>
                    <a class="dropdown-item" href="#"><i class="mr-1 align-middle bx bx-lock-open font-size-16"></i> Lock screen</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="#" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">
                        <i class="mr-1 align-middle bx bx-power-off font-size-16 text-danger"></i> Logout
                    </a>
                    <form action="{{route('logout')}}" method="POST" id="logoutForm">
                        @csrf
                    </form>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                    <i class="bx bx-cog bx-spin"></i>
                </button>
            </div>

        </div>
    </div>
</header> <!-- ========== Left Sidebar Start ========== -->
