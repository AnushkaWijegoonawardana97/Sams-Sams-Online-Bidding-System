@extends('admin.layouts.master')

@section('title', config('app.name'). ' Dashboard | Product')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Create Product</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('product.index') }}">Product</a></li>
                        <li class="breadcrumb-item active">Create</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 m-auto">
                    <div class="card card-primary">
                        <form id="quickForm" novalidate="novalidate" action="{{ route('product.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="product_name">Product Name</label>
                                    <input type="text" name="product_name" class="form-control" id="product_name" placeholder="Enter product name" aria-describedby="product_name-error" aria-invalid="true">
                                    <span id="product_name-error" class="error invalid-feedback">Please enter a product name</span>
                                </div>

                                <div class="form-group">
                                    <label for="product_description">Product Description</label>
                                    <textarea name="product_description" class="form-control" id="product_description" placeholder="Enter product description" aria-describedby="product_description-error" spellcheck="true" cols="20" rows="10"></textarea>
                                    <span id="product_description-error" class="error invalid-feedback">Please enter a product description</span>
                                </div>

                                <div class="form-group">
                                    <label for="product_condition">Product Condition</label>
                                    <select class="form-control" id="product_condition" name="product_condition">
                                        <option value="brand new">Brand New</option>
                                        <option value="second hand">Second Hand</option>
                                        <option value="first owner">First Owner</option>
                                        <option value="imported">Imported</option>
                                    </select>
                                    <span id="product_condition-error" class="error invalid-feedback">Please select the product condition</span>
                                </div>

                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="starting_bid_price">Starting Bid Price</label>
                                            <input type="text" name="starting_bid_price" class="form-control" id="starting_bid_price" placeholder="Enter starting bid price" aria-describedby="starting_bid_price-error" aria-invalid="true">
                                            <span id="starting_bid_price-error" class="error invalid-feedback">Please enter a starting bid price</span>
                                        </div>

                                        <div class="col">
                                            <label for="min_bid_price">Minimum Bid Price</label>
                                            <input type="text" name="min_bid_price" class="form-control" id="min_bid_price" placeholder="Enter minimum bid price" aria-describedby="min_bid_price-error" aria-invalid="true">
                                            <span id="min_bid_price-error" class="error invalid-feedback">Please enter a minimum bid price</span>
                                        </div>

                                        <div class="col">
                                            <label for="bid_ending_date">Bid Closing Date</label>
                                            <input type="date" name="bid_ending_date" class="form-control" id="bid_ending_date" placeholder="Enter bid closing date" aria-describedby="bid_ending_date-error" aria-invalid="true">
                                            <span id="bid_ending_date-error" class="error invalid-feedback">Please enter a bid closing date</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="special_product_notes">Product Special Notes</label>
                                    <textarea name="special_product_notes" class="form-control" id="special_product_notes" placeholder="Enter special product note" aria-describedby="special_product_notes-error" spellcheck="true" cols="20" rows="10"></textarea>
                                    <span id="special_product_notes-error" class="error invalid-feedback">Please enter a special product note</span>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary float-right">Create Product</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


