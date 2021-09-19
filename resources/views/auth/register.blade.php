@extends('auth.layouts.master')
@section('title', 'Sign up for SAMS & SAMS')
@section('content')
    <!-- Auth Page Banner Container -->
    <section class="auth-form-banner" id="register-form-banner"></section>

    <!-- Auth Page Form Container -->
    <section class="auth-form-container" id="register-form-container">
        <div class="auth-form-inner">
            <!-- Auth Form Navigation -->
            <nav class="auth-form-nav">
                <a href="/" class="auth-barnding">
                    <img width="175" height="50" src="{{asset('img/Logo.png')}}" alt="" class="auth-logo">
                </a>
            </nav>

            <!-- Auth Form Header -->
            <Header class="auth-form-header">
                <h1 class="auth-header-title">Select Account Type.</h1>
                <p class="auth-header-test">Your are just few clicks away form setting up your SAMS & SAMS account. What you want to be ?</p>
            </Header>

            <!-- Register Buttons -->
            <div class="div register-button-container d-flex align-items-center justify-content-between">
                <!-- Seller Registration -->
                <div class="registration-btn" id="seller-registration">
                    <a href="{{ route('auth.sellerRegistration') }}" class="register-btn-link d-block">
                        <img src="{{asset('images/Seller-Icon.png')}}" alt="" class="registration-icon" width="200" height="200">
                        <a href="{{ route('auth.sellerRegistration') }}" class="btn btn-block btn-outline-primary registration-text-btn">Seller Sign Up</a>
                    </a>
                </div>

                <!-- Buyer Registration -->
                <div class="registration-btn" id="buyer-registration">
                    <a href="{{ route('auth.buyerRegistration') }}" class="register-btn-link d-block">
                        <img src="{{asset('images/Buyer-Icon.png')}}" alt="" class="registration-icon" width="200" height="200">
                        <a href="{{ route('auth.buyerRegistration') }}" class="btn btn-block btn-outline-primary registration-text-btn">Buyer Sign Up</a>
                    </a>
                </div>
            </div>

            <!-- Auth Footer  -->
            <footer class="auth-footer text-center">
                <p class="auth-footer-text">
                    Go back to <a href="{{ route('login') }}" class="login-link">Login</a>
                </p>

                <p class="auth-footer-text">
                    By clicking on sign up button above, you confirm that you agree to the Skooleeo <a href="" class="login-link">Terms of Service</a> and <a href="" class="login-link">Privacy Policy</a>
                </p>
            </footer>
        </div>
    </section>
@endsection