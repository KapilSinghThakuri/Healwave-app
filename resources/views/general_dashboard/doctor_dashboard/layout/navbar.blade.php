<body>
    <div class="main-wrapper">
        <div class="header">
            <div class="header-left">
                <a href="{{ route('doctor.dashboard') }}" class="logo">
                    <img src="{{ asset('admin_Assets/img/logo.png') }}" width="35" height="35" alt="">
                    <span>Healwave</span>
                </a>
            </div>
            <a id="toggle_btn" href="javascript:void(0);" title="Hide Sidebar" data-toggle="tooltip"><i
                    class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar" title="Hide Sidebar"
                data-toggle="tooltip"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img">
                            <img class="rounded-circle" src="{{ asset('admin_Assets/img/user.jpg') }}" width="24"
                                alt="Admin">
                            <span class="status online"></span>
                        </span>
                        @if (Auth::check())
                            @php
                                $fullName = Auth::user()->username;
                                $parts = explode(' ', $fullName);
                                $firstName = $parts[0];
                            @endphp
                            Hello, <span>{{ $firstName }}</span>!
                        @else
                            Please Signin!
                        @endif
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="">My Profile</a>
                        <a class="dropdown-item" href="">Edit Profile</a>
                        <a class="dropdown-item" href="">Settings</a>
                        <a class="dropdown-item" href="{{ route('doctor.logout') }}">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Doctor</li>
                        <li class="{{ request()->routeIs('doctor.dashboard') ? 'active' : '' }}">
                            <a href="{{ route('doctor.dashboard') }}"><i class="fa fa-dashboard"></i>
                                <span>Dashboard</span></a>
                        </li>
                        <li
                            class="{{ request()->routeIs('doctor.profile') || request()->routeIs('profile.edit') ? 'active' : '' }}">
                            <a href="{{ route('doctor.profile') }}"> <i class="fa fa-user" aria-hidden="true"></i>
                                <span>My Profile</span></a>
                        </li>
                        <li
                            class="{{ request()->routeIs('my-schedule.index') || request()->routeIs('my-schedule.create') || request()->routeIs('my-schedule.edit') ? 'active' : '' }} ">
                            <a href="{{ route('my-schedule.index') }}"><i class="fa fa-calendar-check-o"></i> <span>My
                                    Schedule</span></a>
                        </li>
                        <li
                            class="{{ request()->routeIs('patient.appointment') || request()->routeIs('patient.appointment.view') ? 'active' : '' }}">
                            <a href="{{ route('patient.appointment') }}"><i class="fa fa-calendar"></i>
                                <span>Appointments</span></a>
                        </li>
                        <li class="{{ request()->routeIs('patient.dashboard') ? 'active' : '' }} ">
                            <a href="{{ route('patient.dashboard') }}"><i class="fa fa-wheelchair"></i>
                                <span>Patients</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
