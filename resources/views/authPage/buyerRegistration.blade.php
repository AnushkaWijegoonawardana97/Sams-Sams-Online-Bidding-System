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
                <form method="POST" action="{{route('auth.createSeller')}}">
                    @csrf
                    <div class="form-group">
                        <label for="first_name">Fisrt Name</label>
                        <input type="text" name="first_name" id="" class="form-control">
                    </div>


                    <label for="">Last Name</label>
                    <input type="text" name="last_name" id="" >

                    <label for="">Seller Type</label>
                    <select name="seller_type" id="">
                        <option value="company">Company</option>
                        <option value="individual">Individual</option>
                    </select>

                    <label for="">Cnpany Name</label>
                    <input type="text" name="company_name" id="" >

                    <label for="">Contact number</label>
                    <input type="text" name="contact_number" id="" >

                    <label for="">Email Address</label>
                    <input type="text" name="email" id="" >

                    <label for="">Address</label>
                    <input type="text" name="address" id="" >

                    <input type="submit" value="Register">
                </form>
                <p class="register-footer-text">
                    Don't have an account? <a href="{{ route('auth.register') }}" class="login-link">Register</a>
                </p>
            </footer>
        </div>
    </section>
@endsection