<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Activitylog\Models\Activity;
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
       $activites = Activity::all()->take(10);
       $products = Product::all()->take(5);
       return view('admin.dashboard')->with('activites', $activites)->with('products', $products);
    }
}
