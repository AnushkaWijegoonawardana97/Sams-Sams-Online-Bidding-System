@extends('admin.layouts.master')

@section('title', config('app.name'). ' Dashboard | Product')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">View Product</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('product.index') }}">Product</a></li>
                        <li class="breadcrumb-item active">View</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            @if(Session::has('message'))
                <div class="alert {{Session::get('class')}} alert-dismissible fade show" role="alert">
                    <strong>{{Session::get('message')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            
            <div class="row">
                <div class="col-md-12 m-auto">
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            @if($product->product_images)
                                                @php
                                                    $prodImages = explode('|', $product->product_images);
                                                @endphp
                                                @foreach($prodImages as $key=>$value)
                                                    <li data-target="#carouselExampleIndicators" data-slide-to={{$key}} class="@if($key === 0) active @endif"></li>
                                                @endforeach
                                            @endif
                                        </ol>

                                        <div class="carousel-inner">
                                            @if($product->product_images)
                                                @php
                                                    $prodImages = explode('|', $product->product_images);
                                                @endphp
                                                @foreach($prodImages as $key=>$value)
                                                    <div class="carousel-item @if($key === 0) active @endif">
                                                        <img class="d-block w-100" src="{{asset($value)}}" alt="First slide">
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>

                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>

                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h3 class="font-weight-bolder mb-3">{{$product->product_name}}</h3>

                                    <hr>
                                    
                                    <p class="">{!! $product->product_description !!}</p>
                                    
                                    <hr>
                                    <h6 class="font-weight-bold">Special Product Description</h6>
                                    <p >{!! $product->special_product_notes !!}</p>

                                    <hr>


                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <h5>
                                                <span class="font-weight-bold">Product Category</span>: {{$product->starting_bid_price}} LKR
                                            </h5>
                                        </div>

                                        <div class="col-md-6">
                                            <h5>
                                                <span class="font-weight-bold">Bidding Ends</span>: {{$bidends}}
                                            </h5>
                                        </div>
                                    </div>  

                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5>
                                                <span class="font-weight-bold">Product Condition</span>: <span class="badge badge-pill badge-secondary">{{$product->product_condition}}</span>
                                            </h5>
                                        </div>

                                        <div class="col-md-6">
                                            <h5>
                                                <span class="font-weight-bold">Product Category</span>: <span class="badge badge-pill badge-primary">{{$category->category_name}}</span>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-end">
                            <a href="{{ route('product.edit', $product->id) }}" class="btn btn-warning text-center mr-2"> <i class="fas fa-pencil-alt mr-3"></i> Edit Product</a>
                            <a href="" class="btn btn-info text-center mx-2"> <i class="fas fa-calendar-alt mr-3"></i> View Inspection Schedules</a>
                            <a href="" class="btn btn-info text-center mx-2"> <i class="fas fas fa-boxes mr-3"></i> View Product Bids</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


