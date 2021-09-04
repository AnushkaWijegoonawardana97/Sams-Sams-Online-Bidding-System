<?php

namespace App\Http\Controllers\Admin;

use App\ProductBids;
use App\Buyer;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Activitylog\Contracts\Activity;


class ProductBidsController extends Controller
{
    public function index()
    {
        $productbids = ProductBids::all()->sortByDesc('created_at');
        return view('admin.product-bids.index', compact('productbids', $productbids));
    }

    public function list()
    {
        $products = Product::all()->sortByDesc('created_at');
        return view('admin.product-bids.list', compact('products', $products));
    }

    public function create($id)
    {
        $product = Product::find($id);
        $productbids = ProductBids::where('product_id', $id)->max("bid_price");
        $buyers = Buyer::all()->sortByDesc('created_at');
        
        if($product) {
            return view('admin.product-bids.create', compact('product', $product))->with("buyers", $buyers)->with('productbids', $productbids);
        }
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'bid_price' => 'required',
            'product_id' => 'required',
            'buyer_id' => 'required'
        ]);

        $productbid = new ProductBids();
        $productbid->bid_price = $request->bid_price;
        $productbid->product_id = $request->product_id;
        $productbid->buyer_id = $request->buyer_id;
        $productbid->save();

        activity('New Product Bid Placed')->performedOn($productbid)->log('New product bid placed - Dashboard Activity');

        return redirect(route('product_bids.index'))->with('message', 'New product bid palced successfully!')->with('class', 'alert-success');
    }

    public function show($id)
    {
        $productbid = ProductBids::find($id);

        if($productbid) {
            return view('admin.product-bids.edit', compact('productbid', $productbid));
        }
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'bid_price' => 'required',
            'product_id' => 'required',
            'buyer_id' => 'required'
        ]);

        $productbid = ProductBids::find($id);

        if($productbid) {
            $productbid = new ProductBids();
            $productbid->bid_price = $request->bid_price;
            $productbid->product_id = $request->product_id;
            $productbid->buyer_id = $request->buyer_id;
            $category->save();

            activity('Product Bid Price Updated')->performedOn($productbid)->log('Product bid price has been updated - Dashboard Activity');
        }

        return redirect(route('product_bids.show', $productbid->id))->with('message', 'Product bid price has been updated succesfully !')->with('class', 'alert-info');
    }

    public function delete($id)
    {
        $productbid = ProductBids::find($id);

        if($productbid) {
            $productbid->delete();
            activity('Product Bid Cancled')->performedOn($productbid)->log('Product bid has been cancled - Dashboard Activity');
            return redirect(route('product_bids.index'))->with('message', 'Product bid has been cancled successfully !')->with('class', 'alert-warning');
        }
    }
}
