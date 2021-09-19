@extends('auth.layouts.master')
@section('title', "Let's Sign up as a seller")
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
                    <h1 class="auth-header-subtitle">Sign Up as a Seller.</h1>
                    <p class="auth-header-test">Buy sign up a seller you can sell any product to anyone arround the country. Let's hurry up what are we waiting for.</p>
                </Header>

                <form method="POST" action="{{route('auth.createSeller')}}"  class="registration-form">
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
                                <label for="seller_type">Seller Type</label>
                                <select id="inputState" class="form-control @error('seller_type') is-invalid @enderror" name="seller_type">
                                    <option value="company">Company</option>
                                    <option value="dealer">Dealer</option>
                                    <option value="individual">Individual</option>
                                </select>
                                @error('seller_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="company_name">Company Name</label>
                                <input type="text" class="form-control @error('company_name') is-invalid @enderror" placeholder="Company Name" name="company_name" value="{{ old('company_name') }}">
                                @error('company_name')
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
                            <div class="col-md-12">
                                <label for="address">Address</label>
                                <input type="text" class="form-control @error('address') is-invalid @enderror" placeholder="Address" name="address" value="{{ old('address') }}">
                                 @error('address')
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

                    <button type="submit" class="btn btn-primary btn-block mt-5">Register as a seller</button>
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