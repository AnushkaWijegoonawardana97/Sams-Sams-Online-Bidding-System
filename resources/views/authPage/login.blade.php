@extends('authPage.layouts.master')

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
                <p class="auth-header-test">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, rem?</p>
            </Header>

            <!-- Login Form -->
            <form>
                <div class="form-group">
                    <label for="usernameemail">Email address</label>
                    <input type="email" class="form-control" id="usernameemail" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="userpassword">Password</label>
                    <input type="password" class="form-control" id="userpassword">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="keeploged">
                    <label class="form-check-label" for="keeploged">Keep me logged in</label>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Log in</button>
            </form>

            <!-- Auth Footer  -->
            <footer class="auth-footer text-center">
                <p class="auth-footer-text">
                    Don't have an account? <a href="{{ route('auth.register') }}" class="login-link">Register</a>
                </p>

                <p class="auth-footer-text">
                    <a href="{{ route('auth.passwordReset') }}" class="login-link">Forgot password?</a>
                </p>
            </footer>
        </div>
    </section>
@endsection