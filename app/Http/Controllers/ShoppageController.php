<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductBids;
use App\ProductCategory;
use Carbon\Carbon;

class ShoppageController extends Controller
{
        
    public function shopPage()
    {
        $products = Product::all()->sortByDesc('created_at');
        $productbids = ProductBids::all()->sortByDesc('created_at');
        return view('landingPage.shop', compact('products', $products))->with('productbids', $productbids);
    }

    public function categoryShopPage($category_name) {
        $category = ProductCategory::where('category_name', str_replace('-', ' ', $category_name))->get();
        $products = Product::where('category_id', $category[0]->id)->get();
        $productbids = ProductBids::all()->sortByDesc('created_at');
        return view('landingPage.categoryShop', compact('category', $category))->with('products', $products)->with('productbids', $productbids);
    }

    public function productPage($product_name) {
        $product = Product::where('product_name', str_replace('-', ' ', $product_name))->get();
        $category = ProductCategory::find($product[0]->category_id);
        $productbids = ProductBids::where('product_id', $product[0]->id)->max("bid_price");
        $products = Product::where('category_id', $product[0]->category_id)->take(4)->get();
        $allBids = ProductBids::where('product_id', $product[0]->id)->get();
        $productbidslist = ProductBids::all()->sortByDesc('created_at');

        $date1 = Carbon::parse($product[0]->bid_ending_date);
        $date2 = Carbon::now();
        $bidends = $date1->diffForHumans($date2);

        if($product) {
            return view('landingPage.product')->with('product',$product[0])->with('bidends', $bidends)->with('category', $category)->with('products', $products)->with('productbids', $productbids)->with("allBids", $allBids)->with('productbidslist', $productbidslist);
        }
    }

    
}
