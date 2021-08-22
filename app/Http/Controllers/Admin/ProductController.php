<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use Spatie\Activitylog\Contracts\Activity;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('admin.product.index', compact('products', $products));
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'product_name' => 'required',
            'product_description' => 'required',
            'product_condition' => 'required',
            'starting_bid_price' => 'required',
            'min_bid_price' => 'required',
            'bid_ending_date' => 'required',
        ]);

        $product = new Product();
        $product->product_name = $request->product_name;
        $product->product_description = $request->product_description;
        $product->product_condition = $request->product_condition;
        $product->starting_bid_price = $request->starting_bid_price;
        $product->min_bid_price = $request->min_bid_price;
        $product->bid_ending_date = $request->bid_ending_date;
        $product->special_product_notes = $request->special_product_notes;
        $product->inspection_video = $request->inspection_video;
        $product->status = "Active";
        $product->save();

        activity('New Product')->performedOn($product)->log('New product category created - Dashboard Activity');

        return redirect(route('product.index'))->with('message', 'Product created Successfully !');
    }


    public function show($id)
    {
        $product = Product::find($id);

        if($product) {
            return view('admin.product.show', compact('product', $product));
        }
    }

    public function edit($id)
    {
        $product = Product::find($id);

        if($product) {
            return view('admin.product.edit', compact('product', $product));
        }
    }
}
