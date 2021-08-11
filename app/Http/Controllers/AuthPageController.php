<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthPageController extends Controller
{
    public function loginPage()
    {
        return view('authPage.login');
    }

    public function passwordReset()
    {
        return view('authPage.passwordReset');
    }

    public function register()
    {
        return view('authPage.register');
    }


    public function sellerRegistration()
    {
        return view('authPage.sellerRegistration');
    }

    public function buyerRegistration()
    {
        return view('authPage.buyerRegistration');
    }
}
