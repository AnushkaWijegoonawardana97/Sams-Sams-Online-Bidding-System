@extends('authPage.layouts.master')

@section('content')
    <!-- Register Page Banner Container -->
    <section class="register-form-banner" id="seller-form-banner"></section>

    <!-- Register Page Form Container -->
    <section class="register-form-container" id="seller-form-container">
        <div class="register-form-inner">
            <!-- Register Form Navigation -->
            <nav class="register-form-nav">
                <a href="/" class="register-barnding">
                    <img width="175" height="50" src="{{asset('img/Logo.png')}}" alt="" class="register-logo">
                </a>
            </nav>

            <!-- Registration Wizzard -->
            <div class="registration-wizard-container">
                <div class="registration-wizard-header"></div>

                <form action="" class="registration-form">
                    <div class="form-wizard-card" id="step">
                        
                    </div>
                </form>
            </div>

            <!-- Register Footer  -->
            <footer class="register-footer text-center">
                <p class="register-footer-text">
                    Don't have an account? <a href="{{ route('auth.register') }}" class="login-link">Register</a>
                </p>
            </footer>
        </div>
    </section>
@endsection