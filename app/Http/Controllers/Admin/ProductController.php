<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        // $categories = ProductCategory::all();

        // return view('admin.product-category.index', compact('categories', $categories));
        return view('admin.product-category.index');
    }

    public function create()
    {
        return view('admin.product-category.create');
    }

    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'category_name' => 'required',
        //     'category_description' => 'required'
        // ]);

        // $category = new ProductCategory();

        // $category->category_name = $request->category_name;

        // $category->category_description = $request->category_description;

        // $category->save();

        // return redirect(route('product_category.index'))->with('message', 'Product category created Successfully !');
    }

    public function show($id)
    {
        // $category = ProductCategory::find($id);

        // if($category) {
        //     return view('admin.product-category.edit', compact('category', $category));
        // }
    }

    public function update(Request $request, $id)
    {
        // $this->validate($request, [
        //     'category_name' => 'required',
        //     'category_description' => 'required'
        // ]);

        // $category = ProductCategory::find($id);

        // if($category) {
        //     $category->category_name = $request->category_name;

        //     $category->category_description = $request->category_description;

        //     $category->save();
        // }

        // return redirect(route('product_category.show', $category->id))->with('message', 'Product category updated Successfully !');
    }

    public function delete($id)
    {
        // $category = ProductCategory::find($id);

        // if($category) {
        //     $category->delete();
        //     return redirect(route('product_category.index'))->with('message', 'Product category deleted Successfully !');
        // }
    }
}
