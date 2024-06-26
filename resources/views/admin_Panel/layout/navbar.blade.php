<body>
    <div class="main-wrapper">
        <div class="header">
            <div class="header-left">
                <a href="{{ route('admin.dashboard') }}" class="logo">
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
                                @foreach ($adminNotifications as $notification)
                                    <li class="notification-message">
                                        <a href="#">
                                            <div class="media">
                                                <div class="checkbox-container">
                                                    <input type="checkbox" name="notification_id"
                                                        value="{{ $notification->id }}" class="notification-checkbox"
                                                        data-notification-id="{{ $notification->id }}"
                                                        title="Mark as Read" data-toggle="tooltip">
                                                </div>
                                                
                                                @if ($notification->data['method'] === 'doctor_create' && 'schedule_create' && 'schedule_update' && 'schedule_delete')
                                                    <span class="avatar">
                                                        <img alt="John Doe"
                                                            src="{{ asset($notification->data['doctor_profile']) }}"
                                                            class="img-fluid">
                                                    </span>
                                                @endif
                                                <div class="media-body">
                                                    <p class="noti-details">
                                                        <span class="noti-title">
                                                            @switch($notification->data['method'])
                                                                @case('doctor_create')
                                                                    <strong style="color: #3498db; font-weight: 400;"> Dr.
                                                                        {{ $notification->data['doctor_name'] }}</strong> has
                                                                    added to our hospital!.
                                                                @break

                                                                @case('schedule_create')
                                                                    <strong style="color: #3498db; font-weight: 400;">
                                                                        {{ $notification->data['doctor_name'] }}</strong> has
                                                                    scheduled an appointment for
                                                                    {{ $notification->data['scheduled_day'] }}.
                                                                @break

                                                                @case('schedule_update')
                                                                    <strong style="color: #3498db; font-weight: 400;">
                                                                        {{ $notification->data['doctor_name'] }}</strong> has
                                                                    updated their appointment schedule.
                                                                @break

                                                                @case('schedule_delete')
                                                                    <strong style="color: #3498db; font-weight: 400;">
                                                                        {{ $notification->data['doctor_name'] }}</strong> has
                                                                    deleted his appointment schedule for
                                                                    {{ $notification->data['scheduled_day'] }}.
                                                                @break

                                                                @case('appointment_create')
                                                                    <strong style="color: #3498db; font-weight: 400;">New
                                                                        appointment alert:</strong> <span
                                                                        class="noti-title">{{ $notification->data['patient_name'] }}</span>
                                                                    has booked the schedule for
                                                                    {{ $notification->data['appointment_time_interval'] }}.
                                                                @break

                                                                @case('feedback_alert')
                                                                    <strong
                                                                        style="color: #3498db; font-weight: 400;">{{ $notification->data['subject'] }}:</strong>
                                                                    <span
                                                                        class="noti-title">{{ $notification->data['fullname'] }}
                                                                    </span>has send feedback on
                                                                    {{ $notification->data['feedback_subject'] }} subject.
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
                    <a href="#" class="dropdown-toggle nav-link user-link" title="Profile" data-toggle="dropdown">
                        <span class="user-img">
                            <img class="rounded-circle" src="{{ asset('admin_Assets/img/user.jpg') }}" width="24"
                                alt="Admin">
                            <span class="status online"></span>
                        </span>
                        <span>{{ auth()->user()->getRoleNames()->first() }}</span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="profile.html">My Profile</a>
                        <a class="dropdown-item" href="{{ route('admin.setting') }}">Settings</a>
                        <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
