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
                <h1 class="auth-header-title">Welcome Back.</h1>
                <p class="auth-header-test">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, rem?</p>
            </Header>

            <!-- Register Buttons -->
            <div class="div register-button-container d-flex align-items-center justify-content-between">
                <!-- Seller Registration -->
                <a href="{{ route('auth.sellerRegistration') }}" class="register-btn" id="seller-registration">
                    <div class="register-btn-icon">
                        <img src="" alt="">
                    </div>

                    <div class="register-btn-text">
                        Register as a Seller
                    </div>
                </a>

                <!-- Buyer Registration -->
                <a href="{{ route('auth.buyerRegistration') }}" class="register-btn" id="seller-registration">
                    <div class="register-btn-icon">
                        <img src="" alt="">
                    </div>

                    <div class="register-btn-text">
                        Register as a Buyer
                    </div>
                </a>
            </div>
        </div>
    </section>
@endsection