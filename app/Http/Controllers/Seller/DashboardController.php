<?php

namespace App\Http\Controllers\Seller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function dashboard() 
    {
        $products = Product::all()->sortByDesc('created_at')->take(5);
        return view('seller.dashboard')->with('products', $products);
    }
}
