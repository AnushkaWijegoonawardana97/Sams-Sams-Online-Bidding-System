<?php

namespace App\Http\Controllers\Admin;

use App\ProductCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Activitylog\Contracts\Activity;

class ProductCategoryController extends Controller
{
    public function index()
    {
        $categories = ProductCategory::all()->sortByDesc('created_at');

        return view('admin.product-category.index', compact('categories', $categories));
    }

    public function create()
    {
        return view('admin.product-category.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'category_name' => 'required',
            'category_description' => 'required'
        ]);

        $image = array();
        if($files = $request->category_image) {
            foreach ($files as $file) {
                $image_name = md5(rand(1000, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name. '.' .$ext;
                $upload_path = "images/product_category/";
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $image[] = $image_url;
            }
        }

        $category = new ProductCategory();
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->category_image = implode('|', $image);
        $category->save();

        activity('New Product Category')->performedOn($category)->log('New product category created - Dashboard Activity');

        return redirect(route('product_category.index'))->with('message', 'Product category created Successfully !');
    }

    public function show($id)
    {
        $category = ProductCategory::find($id);

        if($category) {
            return view('admin.product-category.edit', compact('category', $category));
        }
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'category_name' => 'required',
            'category_description' => 'required'
        ]);

        $category = ProductCategory::find($id);

        $image = array();
        if($files = $request->category_image) {
            foreach ($files as $file) {
                $image_name = md5(rand(1000, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name. '.' .$ext;
                $upload_path = "images/product_category/";
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $image[] = $image_url;
            }
        } else {
            $image[] = $category->category_image;
        }


        if($category) {
            $category->category_name = $request->category_name;
            $category->category_description = $request->category_description;
            $category->category_image = implode('|', $image);
            $category->save();

            activity('Product Category Updated')->performedOn($category)->log('Product category has been updated - Dashboard Activity');
        }

        return redirect(route('product_category.show', $category->id))->with('message', 'Product category updated Successfully !');
    }

    public function delete($id)
    {
        $category = ProductCategory::find($id);

        if($category) {
            $category->delete();
            activity('Product Category Deleted')->performedOn($category)->log('Product category has been deleted - Dashboard Activity');
            return redirect(route('product_category.index'))->with('message', 'Product category deleted Successfully !');
        }
    }
}
