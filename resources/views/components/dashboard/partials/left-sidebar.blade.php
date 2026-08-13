<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Menu</li>

                <li>
                    <a href="{{ route('website.home') }}" target="_blank">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard">Website</span>
                    </a>
                </li>

                @can('menus.view')
                    <li>
                        <a href="{{ route('dashboard.menus.index') }}">
                            <i class="fas fa-envelope-open-text"></i>
                            <span data-key="t-dashboard">{{  __('dashboard.menus') }}</span>
                        </a>
                    </li>
                @endcan


                @can('pages.view')
                <li>
                    <a href="{{ route('dashboard.pages.index') }}">
                        <i class="fas fa-file-alt"></i>
                        <span data-key="t-dashboard">{{ __('dashboard.pages') }}</span>
                    </a>
                </li>
                 @endcan


                @can('sliders.view')
                <li>
                    <a href="{{ route('dashboard.sliders.index') }}">
                        <i class="fas fa-sliders-h"></i>
                        <span data-key="t-dashboard">{{  __('dashboard.sliders') }}</span>
                    </a>
                </li>
                @endcan

                @can('faqs.view')
                <li>
                    <a href="{{ route('dashboard.faqs.index') }}">
                        <i class="fas fa-sliders-h"></i>
                        <span data-key="t-dashboard">{{  __('dashboard.faqs') }}</span>
                    </a>
                </li>
                @endcan

                @can('testimonials.view')
                <li>
                    <a href="{{ route('dashboard.testimonials.index') }}">
                        <i class="fas fa-sliders-h"></i>
                        <span data-key="t-dashboard">{{  __('dashboard.testimonials') }}</span>
                    </a>
                </li>
                @endcan

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="grid"></i>
                        <span data-key="t-apps"> {{ __('dashboard.about_us')  }}</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        @can('about.edit')
                        <li>
                            <a href="{{ route('dashboard.about.edit') }}">
                                <span data-key="t-calendar"> {{ __('dashboard.about_us')  }}</span>
                            </a>
                        </li>
                        @endcan
                        @can('about_structs.view')
                        <li>
                            <a href="{{ route('dashboard.about-structs.index') }}">
                                <span data-key="t-calendar">{{ __('dashboard.about_structs')  }}</span>
                            </a>
                        </li>
                        @endcan
                        @can('benefits.view')
                        <li>
                            <a href="{{ route('dashboard.benefits.index') }}">
                                <span data-key="t-calendar">{{ __('dashboard.benefits')  }}</span>
                            </a>
                        </li>
                        @endcan

                    </ul>
                </li>


                @can('hosting.view')
                <li>
                    <a href="{{ route('dashboard.hostings.index') }}">
                          <i class="fas fa-sliders-h"></i>
                        <span data-key="t-calendar">{{ __('dashboard.hostings') }}</span>
                    </a>
                </li>
                @endcan

                @can('servers.view')
                <li>
                    <a href="{{ route('dashboard.servers.index') }}">
                          <i class="fas fa-sliders-h"></i>
                        <span data-key="t-calendar">{{ __('dashboard.servers') }}</span>
                    </a>
                </li>
                @endcan

                @can('domains.view')
                <li>
                    <a href="{{ route('dashboard.domains.index') }}">
                          <i class="fas fa-sliders-h"></i>
                        <span data-key="t-calendar">{{ __('dashboard.domains') }}</span>
                    </a>
                </li>
                @endcan

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="grid"></i>
                        <span data-key="t-apps">plans</span>
                    </a>

                    <ul class="sub-menu" aria-expanded="false">
                        @can('attributes.view')
                        <li>
                            <a href="{{ route('dashboard.attributes.index') }}">
                                <span data-key="t-calendar">{{ __('dashboard.attributes') }}</span>
                            </a>
                        </li>
                        @endcan

                        @can('plans.view')
                        <li>
                            <a href="{{ route('dashboard.plans.index') }}">
                                <span data-key="t-calendar">{{ __('dashboard.plans') }}</span>
                            </a>
                        </li>
                        @endcan

                    </ul>
                </li>
                @can('site_addresses.view')

                <li>
                    <a href="{{ route('dashboard.site-addresses.index') }}">
                        <i class="fas fa-sliders-h"></i>
                        <span data-key="t-dashboard">{{  __('dashboard.site_addresses') }}</span>
                    </a>
                </li>
                @endcan

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="grid"></i>
                        <span data-key="t-apps">{{ __('dashboard.settings') }}</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{ route('dashboard.settings.show') }}">
                                <span data-key="t-calendar">{{ __('dashboard.settings') }}</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('dashboard.configrations.edit','ar') }}">
                                <span data-key="t-calendar">{{ __('dashboard.configration_ar') }}</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('dashboard.configrations.edit','en') }}">
                                <span data-key="t-calendar">{{ __('dashboard.configration_en') }}</span>
                            </a>
                        </li>

                        <li>

                    </ul>
                </li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="grid"></i>
                        <span data-key="t-apps">Management Users</span>
                    </a>

                    <ul class="sub-menu" aria-expanded="false">
                        @can('admins.view')
                            <li>
                                <a href="{{ route('dashboard.admins.index') }}">
                                    <span data-key="t-calendar">{{ __('dashboard.admins') }}</span>
                                </a>
                            </li>
                        @endcan

                        @can('roles.view')
                        <li>
                            <a href="{{ route('dashboard.roles.index') }}">
                                <span data-key="t-calendar">{{ __('dashboard.roles') }}</span>
                            </a>
                        </li>
                        @endcan

                        <li>

                    </ul>
                </li>

                @can('services.view')
                <li>
                    <a href="{{ route('dashboard.services.index') }}">
                        <i class="fas fa-sliders-h"></i>
                        <span data-key="t-dashboard">{{  __('dashboard.services') }}</span>
                    </a>
                </li>
                @endcan

            </ul>

        </div>
        <!-- Sidebar -->
    </div>
</div>
