@extends('auth.layouts.master')
@section('title', "Let's Sign up as a buyer")
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
                <Header class="auth-form-header">
                    <h1 class="auth-header-subtitle">Sign Up as a Buyer.</h1>
                    <p class="auth-header-test">Let's create your buyer account quickly becuase with the buyer account you can place you bid for the thousands of items form all around the country.</p>
                </Header>

                <form method="POST" action="{{route('auth.createBuyer')}}"  class="registration-form">
                    @csrf
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control @error('first_name') is-invalid @enderror" placeholder="First name" name="first_name" value="{{ old('first_name') }}">
                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control  @error('last_name') is-invalid @enderror" placeholder="Last name" name="last_name" value="{{ old('last_name') }}">
                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="contact_number">Contact Number</label>
                                <input type="tel" class="form-control @error('contact_number') is-invalid @enderror" placeholder="Contact Number" name="contact_number" value="{{ old('contact_number') }}">
                                 @error('contact_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}">
                                 @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="username">Username</label>
                                <input type="text" class="form-control @error('username') is-invalid @enderror" placeholder="Username" name="username" value="{{ old('username') }}">
                                 @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="password">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" value="{{ old('password') }}">
                                 @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <p>Resident Address: </p>

                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="res_address_line1">Address Line 1</label>
                                <input type="text" class="form-control @error('res_address_line1') is-invalid @enderror" placeholder="Address Line 1" name="res_address_line1" value="{{ old('res_address_line1') }}">
                                @error('res_address_line1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="res_address_line2">Address Line 2</label>
                                <input type="text" class="form-control  @error('res_address_line2') is-invalid @enderror" placeholder="Address Line 2" name="res_address_line2" value="{{ old('res_address_line2') }}">
                                @error('res_address_line2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-4">
                                <label for="res_city">City</label>
                                <input type="text" class="form-control @error('res_city') is-invalid @enderror" placeholder="City" name="res_city" value="{{ old('res_city') }}">
                                @error('res_city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="res_district">District</label>
                                <input type="text" class="form-control  @error('res_district') is-invalid @enderror" placeholder="District" name="res_district" value="{{ old('res_district') }}">
                                @error('res_district')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="res_zip_code">Zip Code</label>
                                <input type="text" class="form-control  @error('res_zip_code') is-invalid @enderror" placeholder="Zip Code" name="res_zip_code" value="{{ old('res_zip_code') }}">
                                @error('res_zip_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block mt-5">Register as a buyer</button>
                </form>
            </div>

            <!-- Register Footer  -->
            <footer class="register-footer text-center">
                <p class="register-footer-text">
                   By clicking on sign up button above, you confirm that you agree to the Skooleeo <a href="" class="login-link">Terms of Service</a> and <a href="" class="login-link">Privacy Policy</a>
                </p>
            </footer>
        </div>
    </section>
@endsection