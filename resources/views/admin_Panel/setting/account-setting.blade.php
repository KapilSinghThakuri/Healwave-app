@include('admin_Panel.layout.header')

<div class="setting-wrapper">
    <div class="content">

        <!-- Breadcrumb -->
        <div class="row align-items-center justify-content-between mb-4 breadcrumbs-div">
            <div class="col-sm-6">
                {{ Breadcrumbs::render() }}
            </div>
            <div class="col-sm-6 text-right">
                <a class="btn btn-danger btn-rounded" href="{{ route('admin.dashboard') }}"><i class="fa fa-chevron-left"
                        aria-hidden="true"></i> Back</a>
            </div>
        </div>
        <!-- /Breadcrumb -->

        <div class="row gutters-sm">
            <div class="col-md-4 d-none d-md-block">
                <div class="card">
                    <div class="card-body">
                        <nav class="nav flex-column nav-pills nav-gap-y-1">
                            <a href="#profile" data-toggle="tab"
                                class="nav-item nav-link has-icon nav-link-faded active">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-user mr-2">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>Profile Information
                            </a>
                            <a href="#account" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-settings mr-2">
                                    <circle cx="12" cy="12" r="3"></circle>
                                    <path
                                        d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                    </path>
                                </svg>Account Settings
                            </a>
                            <a href="#security" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield mr-2">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                </svg>Security
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header border-bottom mb-3 d-flex d-md-none">
                        <ul class="nav nav-tabs card-header-tabs nav-gap-x-1" role="tablist">
                            <li class="nav-item">
                                <a href="#profile" data-toggle="tab" aria-controls="profile" id="profileTab"
                                    class="nav-link has-icon active"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg></a>
                            </li>
                            <li class="nav-item">
                                <a href="#account" data-toggle="tab" class="nav-link has-icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings">
                                        <circle cx="12" cy="12" r="3"></circle>
                                        <path
                                            d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                        </path>
                                    </svg></a>
                            </li>
                            <li class="nav-item">
                                <a href="#security" data-toggle="tab" aria-controls="security" id="securityTab"
                                    class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-shield">
                                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                    </svg></a>
                            </li>
                            <li class="nav-item">
                                <a href="#notification" data-toggle="tab" class="nav-link has-icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                        <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                    </svg></a>
                            </li>
                            <li class="nav-item">
                                <a href="#billing" data-toggle="tab" class="nav-link has-icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-credit-card">
                                        <rect x="1" y="4" width="22" height="16" rx="2"
                                            ry="2"></rect>
                                        <line x1="1" y1="10" x2="23" y2="10"></line>
                                    </svg></a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body tab-content">
                        <div class="tab-pane active" id="profile" aria-labelledby="profileTab">
                            <h5>YOUR PROFILE INFORMATION</h5>
                            <hr>
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form action="{{ route('user-profile-information.update') }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" class="form-control" id="username"
                                        aria-describedby="fullNameHelp" placeholder="Enter your username"
                                        value="{{ old('username') ?? auth()->user()->username }}">
                                    @error('username')
                                        <span class="alert alert-danger">{{ $message }}</span>
                                    @enderror
                                    <small id="fullNameHelp" class="form-text text-muted">Your username & email
                                        address are appear around here where you are mentioned. You can change or remove
                                        it at any time.</small>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input type="text" name="email" class="form-control" id="email"
                                        placeholder="Enter your website address"
                                        value="{{ old('email') ?? auth()->user()->email }}">
                                    @error('email')
                                        <span class="alert alert-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Update Profile</button>
                            </form>
                        </div>


                        <div class="tab-pane" id="account">
                            <h5>ACCOUNT SETTINGS</h5>
                            <hr>
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form method="POST" action="{{ route('admin.deleteAccount') }}">
                                @method('DELETE')
                                @csrf
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" class="form-control" id="username"
                                        aria-describedby="fullNameHelp" placeholder="Enter your username"
                                        value="{{ old('username') ?? auth()->user()->username }}">
                                    @error('username')
                                        <span class="alert alert-danger">{{ $message }}</span>
                                    @enderror
                                    <small id="usernameHelp" class="form-text text-muted">After changing your
                                        username, your old username becomes available for anyone else to claim.</small>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label class="d-block text-danger">Delete Account</label>
                                    <p class="text-muted font-size-sm">Once you delete your account, there is no going
                                        back. Please be certain.</p>
                                </div>
                                <button class="btn btn-danger" type="submit">Delete Account</button>
                            </form>
                        </div>


                        <div class="tab-pane" id="security" aria-labelledby="securityTab">
                            <h5>SECURITY SETTINGS</h5>
                            <hr>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    @if (session('status') == 'two-factor-authentication-enabled')
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <h5 class="alert-heading">Two-Factor Authentication Enabled</h5>
                                            <p class="mb-1">Your Two-Factor Authentication has been successfully
                                                enabled!</p>
                                            <p class="font-medium text-sm">Please complete the configuration below by
                                                scanning the QR code to ensure your account's security.</p>
                                            <button type="button" class="close" data-dismiss="alert"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif
                                    @if (session('status') == 'two-factor-authentication-disabled')
                                        <span class="alert alert-danger">Your Two-Factor Authentication Has Been
                                            Disabled !!!<span>
                                    @endif
                                </div>
                            </div>

                            <div id="success_message"></div>
                            <ul id="saveForm_errlist"> </ul>

                            <form id="change-password-form">
                                <div class="form-group">
                                    <label class="d-block">Change Password</label>
                                    <input type="password" name="current_password" id="current_password"
                                        class="form-control mb-2" placeholder="Enter your current password">
                                    @error('current_password')
                                        <span class="alert alert-danger">{{ $message }}</span>
                                    @enderror

                                    <input type="password" name="password" id="password"
                                        class="form-control mb-2 mt-1" placeholder="New password">
                                    @error('password')
                                        <span class="alert alert-danger">{{ $message }}</span>
                                    @enderror

                                    <input type="password" name="password_confirmation" id="password_confirmation"
                                        class="form-control mb-2 mt-1" placeholder="Confirm new password">
                                    @error('password_confirmation')
                                        <span class="alert alert-danger">{{ $message }}</span>
                                    @enderror

                                    <button type="submit" class="btn btn-primary">Change Password</button>
                                </div>
                            </form>

                            <hr>
                            @if (auth()->user()->two_factor_secret)
                                <form method="POST" action="{{ route('two-factor.disable') }}"
                                    id="twoFactorAuthenticationButton">
                                    @csrf
                                    @method('DELETE')
                                    <div class="form-group">
                                        <label class="d-block">Two Factor Authentication</label>
                                        <button class="btn btn-danger" type="submit">Disable two-factor
                                            authentication</button>
                                        <p class="small text-muted mt-2">Two-factor authentication adds an additional
                                            layer of security to your account by requiring more than just a password to
                                            log in.</p>
                                    </div>
                                </form>
                            @else
                                <form method="POST" action="{{ route('two-factor.enable') }}"
                                    id="twoFactorAuthenticationButton">
                                    @csrf
                                    <div class="form-group">
                                        <label class="d-block">Two Factor Authentication</label>
                                        <button class="btn btn-info" type="submit">Enable two-factor
                                            authentication</button>
                                        <p class="small text-muted mt-2">Two-factor authentication adds an additional
                                            layer of security to your account by requiring more than just a password to
                                            log in.</p>
                                    </div>
                                </form>
                            @endif

                            @if (auth()->user()->two_factor_secret)
                                <div class="mb-3">
                                    <h4>QR Codes: </h4>
                                    {!! auth()->user()->twoFactorQrCodeSvg() !!}
                                </div>
                                <div>
                                    @php
                                        $recoveryCodes = json_decode(
                                            decrypt(auth()->user()->two_factor_recovery_codes),
                                        );
                                    @endphp
                                    <h4>Recovery Codes: </h4>
                                    <ul>
                                        @foreach ($recoveryCodes as $recoveryCode)
                                            <li>{{ $recoveryCode }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin_Panel.layout.footer')
