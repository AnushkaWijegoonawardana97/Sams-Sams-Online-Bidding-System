@extends('authPage.layouts.master')

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
                <p class="auth-header-test">Please select the type of Account You want to Sign Up for:</p>
            </Header>

            <!-- Register Buttons -->
            <div class="div register-button-container d-flex align-items-center justify-content-between">
                <!-- Seller Registration -->
                <div class="registration-btn" id="seller-registration">
                    <a href="{{ route('auth.sellerRegistration') }}" class="register-btn-link d-block">
                        <img src="{{asset('img/user-tag-solid.svg')}}" alt="" class="registration-icon" width="200" height="200">
                        <a href="{{ route('auth.sellerRegistration') }}" class="btn btn-block btn-outline-primary registration-text-btn">Seller Account</a>
                    </a>
                </div>

                <!-- Buyer Registration -->
                <div class="registration-btn" id="buyer-registration">
                    <a href="{{ route('auth.buyerRegistration') }}" class="register-btn-link d-block">
                        <img src="{{asset('img/user-tag-solid.svg')}}" alt="" class="registration-icon" width="200" height="200">
                        <a href="{{ route('auth.buyerRegistration') }}" class="btn btn-block btn-outline-primary registration-text-btn">Buyer Account</a>
                    </a>
                </div>
            </div>

            <!-- Auth Footer  -->
            <footer class="auth-footer text-center">
                <p class="auth-footer-text">
                    Go back to <a href="{{ route('auth.login') }}" class="login-link">Login</a>
                </p>

                <p class="auth-footer-text">
                    By clicking on sign up button above, you confirm that you agree to the Skooleeo <a href="" class="login-link">Terms of Service</a> and <a href="" class="login-link">Privacy Policy</a>
                </p>
            </footer>
        </div>
    </section>
@endsection