<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;


class ProductInspectionController extends Controller
{
    public function index()
    {

        return view('admin.product-inspections.index');
    }

    public function create()
    {
        $datetime = Carbon::now();
        $todaysDate = date('Y-m-d\TH:i', strtotime($datetime));
        return view('admin.product-inspections.create')->with('todaysDate', $todaysDate);
    }

    public function store(Request $request)
    {
        return redirect(route('product-inspections.index'))->with('message', 'Product category created Successfully !');
    }

    public function show($id)
    {
        return view('admin.product-inspections.edit');
    }
}
