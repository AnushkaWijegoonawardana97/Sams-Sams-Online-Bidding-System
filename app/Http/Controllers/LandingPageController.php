<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductCategory;
use App\ProductBids;
use Carbon\Carbon;

class LandingPageController extends Controller
{
    public function homePage()
    {
        $latestproducts = Product::all()->sortByDesc('created_at')->take(5);
        $bidendingproducts = Product::all()->sortBy('bid_ending_date')->take(5);
        $featuredProducts = Product::where('is_featured', 1)->orderBy('created_at', 'desc')->take(5)->get();
        $productbids = ProductBids::all()->sortByDesc('created_at');
        return view('landingPage.home', compact('latestproducts', $latestproducts))->with('productbids', $productbids)->with('featuredProducts', $featuredProducts)->with('bidendingproducts', $bidendingproducts);
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

    //  public function thankYouPage()
    // {
    //     return view('landingPage.thankyou');
    // }
}
