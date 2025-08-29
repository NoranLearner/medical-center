<!-- Start main-sidebar -->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar sidebar-scroll">
    {{-- -------------------------- --}}
    <div class="main-sidebar-header active border-bottom-0">
        <a class="desktop-logo active" href="{{ url('/' . $page = 'index') }}" style="height: 4rem;">
            <img src="{{URL::asset('assets/img/brand/logo_clinic.png')}}" class="main-logo" alt="logo"
                style="height: 4rem;">
        </a>
        <a class="logo-icon mobile-logo active" href="{{ url('/' . $page = 'index') }}" style="height: 4rem;">
            <img src="{{URL::asset('assets/img/brand/logo_1.png')}}" class="logo-icon" alt="logo" style="height: 4rem;">
        </a>
    </div>
    {{-- -------------------------- --}}
    <div class="main-sidemenu" style="margin-top: 100px">
        {{-- -------------------------- --}}
        <ul class="side-menu">
            {{-- -------------------------- --}}
            <li class="side-item side-item-category">General</li>
            {{-- -------------------------- --}}
            {{-- For Doctors --}}
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page = '#') }}">
                    {{-- https://icons8.com/line-awesome --}}
                    <i class="las la-user-nurse" style="font-size: 32px; margin-right: 10px;"></i>
                    <span class="side-menu__label">Doctors</span>
                    <i class="angle fe fe-chevron-down"></i>
                </a>
                <ul class="slide-menu">
                    <li>
                        <a class="slide-item" href="{{ url('/' . $page = 'dashboard/doctors') }}">All Doctors</a>
                    </li>
                    <li>
                        <a class="slide-item" href="{{ url('/' . $page = 'dashboard/doctors/create') }}">New Doctor</a>
                    </li>
                </ul>
            </li>
            {{-- -------------------------- --}}
            {{-- For Patients --}}
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page = '#') }}">
                    {{-- https://icons8.com/line-awesome --}}
                    <i class="las la-users-cog" style="font-size: 32px; margin-right: 10px;"></i>
                    <span class="side-menu__label">Patients</span>
                    <i class="angle fe fe-chevron-down"></i>
                </a>
                <ul class="slide-menu">
                    <li>
                        <a class="slide-item" href="{{ url('/' . $page = 'dashboard/patients') }}">All Patients</a>
                    </li>
                    <li>
                        <a class="slide-item" href="{{ url('/' . $page = 'dashboard/patients/create') }}">New
                            Patient</a>
                    </li>
                </ul>
            </li>
            {{-- -------------------------- --}}
            {{-- For Sessions --}}
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page = '#') }}">
                    {{-- https://icons8.com/line-awesome --}}
                    <i class="las la-hospital" style="font-size: 32px; margin-right: 10px;"></i>
                    <span class="side-menu__label">Sessions</span>
                    <i class="angle fe fe-chevron-down"></i>
                </a>
                <ul class="slide-menu">
                    <li>
                        <a class="slide-item" href="{{ url('/' . $page = 'dashboard/sessions') }}">All Sessions</a>
                    </li>
                    <li>
                        <a class="slide-item" href="{{ url('/' . $page = 'dashboard/sessions/create') }}">New
                            Session</a>
                    </li>
                </ul>
            </li>
            {{-- -------------------------- --}}
        </ul>
        {{-- -------------------------- --}}
    </div>
    {{-- -------------------------- --}}

</aside>
<!-- End main-sidebar -->
