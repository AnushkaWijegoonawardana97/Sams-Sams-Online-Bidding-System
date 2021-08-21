<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function homePage()
    {
        return view('landingPage.home');
    }

    public function aboutPage()
    {
        return view('landingPage.about');
    }

    public function privacyPolicyPage()
    {
        return view('landingPage.privacyPolicy');
    }

    public function contactPage()
    {
        return view('landingPage.contact');
    }

    public function termsPage()
    {
        return view('landingPage.terms');
    }

    public function guidePage()
    {
        return view('landingPage.guide');
    }

    public function faqPage()
    {
        return view('landingPage.faq');
    }
    public function shopPage()
    {
        return view('landingPage.shop');
    }
}
