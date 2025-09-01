<!-- main-sidebar -->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar sidebar-scroll">
    <div class="main-sidebar-header active" style="border: none; position: initial;">
        <a class="desktop-logo logo-light active" href="{{ url('/' . $page = 'index') }}">
            <img src="{{URL::asset('assets/img/brand/logo_4.png')}}" class="main-logo"
                style="width: 100px; height: auto;" alt="logo">
        </a>
        <a class="logo-icon mobile-logo icon-light active" href="{{ url('/' . $page = 'index') }}">
            <img src="{{URL::asset('assets/img/brand/logo.jpeg')}}" class="logo-icon" alt="logo">
        </a>
    </div>
    <div class="main-sidemenu">
        <ul class="side-menu">
            {{-- -------------------------- --}}
            <li class="side-item side-item-category">{{ __('main.services') }}</li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page = '#') }}">
                    {{-- https://icons8.com/line-awesome --}}
                    <i class="las la-clinic-medical mx-3" style="font-size: 24px;"></i>
                    <span class="side-menu__label">{{ __('main.services') }}</span>
                    <i class="angle fe fe-chevron-down"></i>
                </a>
                <ul class="slide-menu">
                    <li>
                        <a class="slide-item"
                            href="{{ url('/' . $page = 'dashboard/services') }}">{{ __('main.services') }}</a>
                    </li>
                    <li>
                        <a class="slide-item"
                            href="{{ url('/' . $page = 'dashboard/services/create') }}">{{ __('main.add_service') }}</a>
                    </li>
                </ul>
            </li>
            {{-- -------------------------- --}}
            {{-- For Services --}}
            {{-- <li class="slide is-expanded">
                <a class="side-menu__item" href="{{ url('/' . $page = 'dashboard/services') }}">
                    <i class="las la-clinic-medical mx-3" style="font-size: 24px;"></i>
                    <span class="side-menu__label">{{ __('main.services') }}</span>
                    <i class="angle fe fe-chevron-down"></i>
                </a>
                <ul class="slide-menu" style="display: block;">
                    <li>
                        <a class="slide-item"
                            href="{{ url('/' . $page = 'dashboard/services') }}">{{ __('main.services') }}</a>
                    </li>
                    <li>
                        <a class="slide-item"
                            href="{{ url('/' . $page = 'dashboard/services/create') }}">{{ __('main.add_service') }}</a>
                    </li>
                </ul>
            </li> --}}
            {{-- -------------------------- --}}
        </ul>
    </div>
</aside>
<!-- main-sidebar -->
