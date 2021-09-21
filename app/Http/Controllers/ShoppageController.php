<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductBids;
use App\ProductCategory;
use App\ProductInspections;
use App\Cart;
use App\Buyer;
use App\BuyerAddress;
use App\DeliveryDetails;
use Auth;
use Carbon\Carbon;
use Spatie\Activitylog\Contracts\Activity;


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
        $productinspections = ProductInspections::where('product_id', $product[0]->id)->where('inspection_status', "Not Booked")->get();

        $date1 = Carbon::parse($product[0]->bid_ending_date);
        $date2 = Carbon::now();
        $bidends = $date1->diffForHumans($date2);

        if($product) {
            return view('landingPage.product')->with('product',$product[0])->with('bidends', $bidends)->with('category', $category)->with('products', $products)->with('productbids', $productbids)->with("allBids", $allBids)->with('productbidslist', $productbidslist)->with('productinspections', $productinspections);
        }
    }

    public function checkoutPage(Request $request, $id)
    {
        $product = Product::find($id);
        $buyer = Buyer::find($request->buyer_id);
        $buyer_address = BuyerAddress::find($request->buyer_id);

        return view('landingPage.checkout', compact('product', $product))->with('bidValue', $request->bid_price)->with('buyer', $buyer)->with("buyer_address", $buyer_address);
    }

    public function cartPage() {
        $userid = Auth::id();
        $buyer = Buyer::where('user_id', $userid)->get();
        $productbids = ProductBids::where('buyer_id', $buyer[0]->id)->get();
        
        return view('landingPage.cart')->with('productbids', $productbids);
    }

    public function createBids(Request $request) {
        $productbid = new ProductBids();
        $productbid->bid_price = $request->bid_price;
        $productbid->product_id = $request->product_id;
        $productbid->buyer_id = $request->buyer_id;
        $productbid->save();
        activity('New Product Bid Placed')->performedOn($productbid)->log('New product bid placed - User Activity');

        $delivery_details = new DeliveryDetails();
        if($request->delivery_address) {
            $delivery_details->address_line1 = $request->shipaddress_line1;
            $delivery_details->address_line2 = $request->shipaddress_line2;
            $delivery_details->city = $request->shipcity;
            $delivery_details->district = $request->shipdistrict;
            $delivery_details->zip_code = $request->shipzip_code;
            $delivery_details->address_type = "Shipping Address";
        } else {
            $delivery_details->address_line1 = $request->first_name;
            $delivery_details->address_line2 = $request->address_line2;
            $delivery_details->city = $request->city;
            $delivery_details->district = $request->district;
            $delivery_details->zip_code = $request->zip_code;
            $delivery_details->address_type = "Residential Address";
        }
        $delivery_details->delivery_charges = $request->delivery_charges;
        $delivery_details->bid_id = $productbid->id;
        $delivery_details->product_id = $request->product_id;
        $delivery_details->buyer_id = $request->buyer_id;
        $delivery_details->save();

        activity('New Delivery Details Created')->performedOn($delivery_details)->log('New Delivery Details Created - User Activity');

        return redirect(route('landing.cart'))->with('bid_price', $request->bid_price)->with('product', $request->product_name);
    }

    public function deleteBid($id) {
        $productbid = ProductBids::find($id);
        $delivery_details = DeliveryDetails::where('bid_id', $productbid->id)->get();

        if($productbid) {
            $productbid->delete();
            if($delivery_details) {
                $delivery_details[0]->delete();
            }
            activity('Product Bid Cancled')->performedOn($productbid)->log('Product bid has been cancled - User Activity');
            return redirect(route('landing.cart'))->with('message', 'Product bid has been cancled successfully !')->with('class', 'alert-warning');
        }
    }
}
