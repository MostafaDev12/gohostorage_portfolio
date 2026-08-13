<header class="header-with-topbar">
       <!-- start top-header -->
       @include('components.website.partials._top-header')
       <!-- end top-header -->
    <!-- start navigation -->
    <nav class="navbar navbar-expand-lg header-transparent bg-transparent header-reverse" data-header-hover="light">
        <div class="container-fluid">
            <div class="col-auto col-lg-2 me-lg-0 me-auto">
                <a class="navbar-brand" href="{{ route('website.home') }}">
                    <img src="{{ config('configrations.site_logo') }}" data-at2x="{{ config('configrations.site_logo') }}" alt="logo" class="default-logo">
                    <img src="{{ config('configrations.site_logo') }}" data-at2x="{{ config('configrations.site_logo') }}" alt="" class="alt-logo">
                    <img src="{{ config('configrations.site_logo') }}" data-at2x="{{ config('configrations.site_logo') }}" alt="" class="mobile-logo">
                </a>
            </div>
            <div class="col-auto menu-order position-static">
                <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">

                        @foreach ($menus as $menu )

                         @if($menu->segment == '/hostings')
                         <li class="nav-item dropdown dropdown-with-icon">
                            <a href="javascript:;" class="nav-link">{{ $menu->name }}</a>
                            <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                @foreach ($hostings as $hosting)
                                <li class="nav-item dropdown dropdown-with-icon">

                                        <a href="{{ $hosting->sub_hostings->count() > 0 ? 'javascript:void(0)'  : route('website.hosting.show', [$hosting->slug]) }}">


                                        <img src="{{ $hosting->icon_path }}" alt="{{ $hosting->alt_icon }}">
                                        <div class="submenu-icon-content">
                                            {{ $hosting->name }}
                                        </div>
                                    </a>
                                    @if( $hosting->sub_hostings->count() > 0)

                                    <ul class="dropdown-menu">

                                        @foreach ($hosting->sub_hostings as $sub_hosting)
                                        <li>
                                            <a href="{{ route('website.hosting.show',[$sub_hosting->slug]) }}">
                                                <img src="{{ $sub_hosting->icon_path }}" alt="{{ $sub_hosting->alt_icon }}">
                                                <div class="submenu-icon-content">
                                                    {{ $sub_hosting->name }}
                                                </div>
                                            </a>
                                        </li>
                                        @endforeach

                                    </ul> <!-- Closing the submenu -->
                                    @endif
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        @elseif($menu->segment == 'servers')
                         <li class="nav-item dropdown dropdown-with-icon">
                            <a href="javascript:;" class="nav-link">{{ $menu->name }}</a>
                            <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                                @foreach ($servers as $server)
                                <li class="nav-item dropdown dropdown-with-icon">

                                        <a href="{{ $server->sub_servers->count() > 0 ? 'javascript:void(0)'  : route('website.server.show', [$server->slug]) }}">


                                        <img src="{{ $server->icon_path }}" alt="{{ $server->alt_icon }}">
                                        <div class="submenu-icon-content">
                                            {{ $server->name }}
                                        </div>
                                    </a>
                                    @if( $server->sub_servers->count() > 0)

                                    <ul class="dropdown-menu">

                                        @foreach ($server->sub_servers as $sub_server)
                                        <li>
                                            <a href="{{ route('website.server.show',[$sub_server->slug]) }}">
                                                <img src="{{ $sub_server->icon_path }}" alt="{{ $sub_server->alt_icon }}">
                                                <div class="submenu-icon-content">
                                                    {{ $sub_server->name }}
                                                </div>
                                            </a>
                                        </li>
                                        @endforeach

                                    </ul> <!-- Closing the submenu -->
                                    @endif
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        @else

                        <li class="nav-item"><a href="{{ $menu->link }}" class="nav-link">{{ $menu->name }}</a></li>
                         @endif
                        @endforeach

                        

                    </ul>
                </div>
            </div>
            <div class="col-auto col-lg-2 text-end lg-pe-5px">
                <div class="header-icon">
                    {{--
                    <!-- <div class="header-search-icon icon d-none d-sm-flex">
                        <a href="#" class="search-form-icon header-search-form"><i
                                class="align-middle feather icon-feather-search fs-18 me-5px xl-me-0"></i><span
                                class="align-middle d-none d-xxl-inline-block"> Search</span></a>
                        <div class="search-form-wrapper">
                            <button title="Close" type="button" class="search-close">×</button>
                            <form id="search-form" role="search" method="get" class="search-form text-left"
                                action="search-result.html">
                                <div class="search-form-box">
                                    <h2 class="text-dark-gray fw-700 ls-minus-2px text-center mb-4 alt-font">What
                                        are you looking for?</h2>
                                    <input class="search-input" id="search-form-input5e219ef164995"
                                        placeholder="Enter your keywords..." name="s" value="" type="text"
                                        autocomplete="off">
                                    <button type="submit" class="search-button">
                                        <i class="feather icon-feather-search" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div> -->
                    --}}
                    @php
                        $currentLocale = app()->getLocale();
                        $targetLocale = $currentLocale == 'en' ? 'ar' : 'en';
                      
                    @endphp
                    <div class="header-language ms-30px xxl-ms-10px xs-ms-0 d-none d-sm-inline-block">
                        <a href="{{ LaravelLocalization::getLocalizedURL($targetLocale, null, [], true) }}" 
                            class="btn btn-white btn-small btn-rounded btn-box-shadow fw-600">
                            {{ $targetLocale }}
                        </a>
                    </div>
                    <div class="header-button ms-30px xxl-ms-10px xs-ms-0">
                        <a href="{{ config('whmcs.url') }}/index.php?rp=/login" target="_blank"
                            class="btn btn-white btn-small btn-rounded btn-box-shadow btn-switch-text fw-600">
                            <span>
                                <span class="btn-double-text" data-text="{{ __('dashboard.login') }}">{{ __('dashboard.login') }}</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navigation -->
</header>
