<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Product;
use App\ProductInspections;
use Spatie\Activitylog\Contracts\Activity;

class ProductInspectionController extends Controller
{
    public function index()
    {
        $inspections = ProductInspections::all()->sortBy('inspection_start_time');

        return view('admin.product-inspections.index',compact('inspections', $inspections));
    }

    public function create()
    {
        $products = Product::all()->sortByDesc('created_at');
        $datetime = Carbon::now();
        $todaysDate = date('Y-m-d\TH:i', strtotime($datetime));
        return view('admin.product-inspections.create', compact('products', $products))->with('todaysDate', $todaysDate);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'product_id' => 'required',
            'inspection_start_time' => 'required',
            'inspection_end_time' => 'required',
            'inspection_address' => 'required',
        ]);

        $inspections = new ProductInspections();
        $inspections->product_id = $request->product_id;
        $inspections->inspection_start_time = $request->inspection_start_time;
        $inspections->inspection_end_time = $request->inspection_end_time;
        $inspections->inspection_address = $request->inspection_address;
        $inspections->inspection_notes = $request->inspection_notes;
        $inspections->inspection_status = "Not Booked";
        $inspections->save();

        activity('New Product Inspection Time')->performedOn($inspections)->log('New product inspection time created - Dashboard Activity');

        return redirect(route('product_inspection.index'))->with('message', 'Product inspection time created Successfully !');
    }

    public function show($id)
    {
        return view('admin.product_inspection.edit');
    }

    public function update(Request $request, $id)
    {
        return view('admin.product_inspection.show');
    }

     public function delete( $id)
    {
        return view('admin.product_inspection.index');
    }
}

