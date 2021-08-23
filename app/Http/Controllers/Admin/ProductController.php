<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\ProductCategory;
use Spatie\Activitylog\Contracts\Activity;
use Carbon\Carbon;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('admin.product.index', compact('products', $products));
    }

    public function create()
    {
        $categories = ProductCategory::all();
        return view('admin.product.create', compact('categories', $categories));
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
            'product_category' => 'required'
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
        $product->category_id = $request->product_category;
        $product->save();

        activity('New Product')->performedOn($product)->log('New product category created - Dashboard Activity');

        return redirect(route('product.index'))->with('message', 'Product created Successfully !');
    }


    public function show($id)
    {
        $product = Product::find($id);
        $category = ProductCategory::find($product->category_id);
        
        $date1 = Carbon::parse($product->bid_ending_date);
        $date2 = Carbon::now();
        $bidends = $date1->diffForHumans($date2);

        if($product) {
            return view('admin.product.show', compact('product', $product))->with('bidends', $bidends)->with('category', $category);
        }
    }

    public function edit($id)
    {
        $categories = ProductCategory::all();
        $product = Product::find($id);

        if($product) {
            return view('admin.product.edit', compact('product', $product))->with('categories', $categories);
        }
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'product_name' => 'required',
            'product_description' => 'required',
            'product_condition' => 'required',
            'starting_bid_price' => 'required',
            'min_bid_price' => 'required',
            'bid_ending_date' => 'required',
            'product_category' => 'required'
        ]);

        $product = Product::find($id);

        if($product) {
            $product->product_name = $request->product_name;
            $product->product_description = $request->product_description;
            $product->product_condition = $request->product_condition;
            $product->starting_bid_price = $request->starting_bid_price;
            $product->min_bid_price = $request->min_bid_price;
            $product->bid_ending_date = $request->bid_ending_date;
            $product->special_product_notes = $request->special_product_notes;
            $product->inspection_video = $request->inspection_video;
            $product->status = "Active";    
            $product->category_id = $request->product_category;

            $product->save();

            activity('Product Updated')->performedOn($product)->log('Product has been updated - Dashboard Activity');
        }

        return redirect(route('product.show', $product->id))->with('message', 'Product updated Successfully !');
    }
}
