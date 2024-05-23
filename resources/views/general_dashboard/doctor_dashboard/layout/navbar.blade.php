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

                <!-- Notifications - Message Box -->
                <li class="nav-item dropdown d-none d-sm-block">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" title="Notifications">
                        <i class="fa fa-bell-o"></i>
                        <span id="unreadNotificationsCount" class="badge badge-pill bg-danger float-right">
                            0
                        </span>
                    </a>

                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span>Notifications</span>
                        </div>
                        <div class="drop-scroll">
                            <ul class="notification-list">
                                @foreach ($doctorNotifications as $notification)
                                    <li class="notification-message">
                                        <a href="#">
                                            <div class="media">
                                                <div class="checkbox-container">
                                                    <input type="checkbox" name="notification_id"
                                                        value="{{ $notification->id }}" class="notification-checkbox"
                                                        data-notification-id="{{ $notification->id }}"
                                                        title="Mark as Read" data-toggle="tooltip">
                                                </div>
                                                <div class="media-body">
                                                    <p class="noti-details">
                                                        <span class="noti-title">
                                                            @switch($notification->data['method'])
                                                                @case('schedule_update')
                                                                    <strong style="color: #3498db; font-weight: 400;">
                                                                        {{ $notification->data['doctor_name'] }}</strong> has
                                                                    updated their appointment schedule.
                                                                @break
                                                                @case('appointment_create')
                                                                    <strong style="color: #3498db; font-weight: 400;">New
                                                                        appointment alert:</strong> <span
                                                                        class="noti-title">{{ $notification->data['patient_name'] }}</span>
                                                                    has booked the schedule for
                                                                    {{ $notification->data['appointment_time_interval'] }}.
                                                                @break
                                                                @default
                                                                    <strong style="color: #3498db; font-weight: 400;">Notice:
                                                                    </strong> <span class="noti-title"> No new
                                                                        notifications.</span>
                                                            @endswitch
                                                        </span>
                                                    </p>
                                                    <p class="noti-time"><span
                                                            class="notification-time">{{ $notification->created_at->diffForHumans() }}</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        @if (count($adminNotifications) >= 1)
                            <div class="topnav-dropdown-footer">
                                <a href="#" id="mark-all-read">Mark as Read All</a>
                            </div>
                        @endif
                    </div>
                </li>

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
