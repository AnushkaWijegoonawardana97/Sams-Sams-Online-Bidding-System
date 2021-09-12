<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductCategory;
use Carbon\Carbon;

class LandingPageController extends Controller
{
    public function homePage()
    {
        $products = Product::all()->sortByDesc('created_at')->take(4);
        return view('landingPage.home', compact('products', $products));
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
    

     public function checkoutPage()
    {
        return view('landingPage.checkout');
    }

     public function thankYouPage()
    {
        return view('landingPage.thankyou');
    }
}
