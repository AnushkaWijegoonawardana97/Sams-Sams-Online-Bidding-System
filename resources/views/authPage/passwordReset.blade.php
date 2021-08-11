@extends('authPage.layouts.master')

@section('content')
    <!-- Auth Page Banner Container -->
    <section class="auth-form-banner" id="fgpw-form-banner"></section>

    <!-- Auth Page Form Container -->
    <section class="auth-form-container" id="fgpw-form-container">
        <div class="auth-form-inner">
            <!-- Auth Form Navigation -->
            <nav class="auth-form-nav">
                <a href="/" class="auth-barnding">
                    <img width="175" height="50" src="{{asset('img/Logo.png')}}" alt="" class="auth-logo">
                </a>
            </nav>

            <!-- Auth Form Header -->
            <Header class="auth-form-header">
                <h1 class="auth-header-subtitle">Recover your account.</h1>
                <p class="auth-header-test">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, rem?</p>
            </Header>

            <!-- fgpw Form -->
            <form>
                <div class="form-group mb-4">
                    <label for="usernameemail">Email address</label>
                    <input type="email" class="form-control" id="usernameemail" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Send Password Reset Link</button>
            </form>

            <!-- Auth Footer  -->
            <footer class="auth-footer text-center">
                <p class="auth-footer-text">
                    Back to the <a href="{{ route('auth.login') }}" class="login-link">Login</a>
                </p>
            </footer>
        </div>
    </section>
@endsection