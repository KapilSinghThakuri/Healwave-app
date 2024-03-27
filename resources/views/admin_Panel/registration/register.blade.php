@extends('admin_Panel.registration.layout.main')
@section('content')
    <div class="main-wrapper  account-wrapper">
        <div class="account-page">
            <div class="account-center">
                <div class="account-box">
                    <form action="http://dreamguys.co.in/preclinic/template/index.html" class="form-signin">
						<div class="account-logo">
                            <a href="{{ route('register.index') }}"><img src="{{ asset('admin_Assets/img/logo-dark.png') }}" alt=""></a>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Mobile Number</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group checkbox">
                            <label>
                                <input type="checkbox"> I have read and agree the Terms & Conditions
                            </label>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary account-btn" type="submit">Signup</button>
                        </div>
                        <div class="text-center login-link">
                            Already have an account? <a href="{{ route('login.index')}}">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection