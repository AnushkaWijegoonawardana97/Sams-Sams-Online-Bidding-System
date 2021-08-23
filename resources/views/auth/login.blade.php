@extends('auth.layouts.master')
@section('title', 'Sign in for SAMS & SAMS')
@section('content')
    <!-- Auth Page Banner Container -->
    <section class="auth-form-banner" id="login-form-banner"></section>

    <!-- Auth Page Form Container -->
    <section class="auth-form-container" id="login-form-container">
        <div class="auth-form-inner">
            <!-- Auth Form Navigation -->
            <nav class="auth-form-nav">
                <a href="/" class="auth-barnding">
                    <img width="175" height="50" src="{{asset('img/Logo.png')}}" alt="" class="auth-logo">
                </a>
            </nav>

            <!-- Auth Form Header -->
            <Header class="auth-form-header">
                <h1 class="auth-header-title">Welcome Back.</h1>
                <p class="auth-header-test">To keep connected with us please login with your personal information by email address & password.</p>
            </Header>

            <!-- Login Form -->
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="usernameemail">Email address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="usernameemail" aria-describedby="emailHelp" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="userpassword">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="userpassword" name="password"  autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember" >Keep me logged in</label>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Log in</button>
            </form>

            <!-- Auth Footer  -->
            <footer class="auth-footer text-center">
                <p class="auth-footer-text">
                    Don't have an account? <a href="{{ route('auth.register') }}" class="login-link">Register</a>
                </p>

                @if (Route::has('password.request'))
                    <p class="auth-footer-text">
                        <a href="{{ route('password.request') }}" class="login-link">Forgot password?</a>
                    </p>
                @endif
            </footer>
        </div>
    </section>
@endsection