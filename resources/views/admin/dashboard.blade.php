@extends('admin.layouts.master')

@section('title', config('app.name'). ' | Dashboard')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <!-- <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Dashboard</li>
                    </ol> -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="info-box shadow">
                                <span class="info-box-icon bg-info"><i class="fas fa-user-tie"></i></span>

                                <div class="info-box-content">
                                    <h4 class="info-box-text font-weight-bold">Registerd Sellers</h4>
                                    <h4 class="info-box-number">4</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="info-box shadow">
                                <span class="info-box-icon bg-success"><i class="fas fa-user-tag"></i></span>

                                <div class="info-box-content">
                                    <h4 class="info-box-text font-weight-bold">Registerd Buyers</h4>
                                    <h4 class="info-box-number">14</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="info-box shadow">
                                <span class="info-box-icon bg-warning"><i class="fas fas fa-boxes"></i></span>

                                <div class="info-box-content">
                                    <h4 class="info-box-text font-weight-bold">Total Products</h4>
                                    <h4 class="info-box-number">14</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-lg-4">
                            <div class="info-box shadow">
                                <span class="info-box-icon bg-info"><i class="fas fa-gavel"></i></span>

                                <div class="info-box-content">
                                    <h4 class="info-box-text font-weight-bold">Total Bidding Count</h4>
                                    <h4 class="info-box-number">12</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="info-box shadow">
                                <span class="info-box-icon bg-success"><i class="fas fa-truck-loading"></i></span>

                                <div class="info-box-content">
                                    <h4 class="info-box-text font-weight-bold">Total Delivery Order</h4>
                                    <h4 class="info-box-number">6</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="info-box shadow">
                                <span class="info-box-icon bg-warning"><i class="fas fa-coins"></i></span>

                                <div class="info-box-content">
                                    <h4 class="info-box-text font-weight-bold">Total Income</h4>
                                    <h4 class="info-box-number">12768.00 LKR</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-success card-outline mt-4">
                        <div class="card-header">
                            <div class="d-flex align-items-center justify-content-between">
                                <h3 class="card-title mb-0 font-weight-bold">
                                    <i class="fas fa-gavel"></i>
                                    Latest Product Bids
                                </h3>

                                <a href="#" class="card-link font-weight-bold text-success">View More</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-borderless table-hover projects">
                                <thead>
                                    <tr>
                                        <th style="width: 20%" >
                                            Bidding Id
                                        </th>
                                        <th style="width: 20%">
                                            Product Id
                                        </th>
                                        <th style="width: 20%">
                                            Buyer Name
                                        </th>
                                        <th style="width: 20%">
                                            Seller Name
                                        </th>
                                        <th style="width: 20%">
                                            Bidding Amount
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>
                                            # 12 
                                        </th>
                                        <td>
                                            #3
                                        </td>
                                        <td>
                                            Adam Smith
                                        </td>
                                        <td>
                                            Nuwan Perera
                                        </td>
                                        <td>
                                            <span class="text-success font-weight-bold">1500 LKR</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>
                                            # 11 
                                        </th>
                                        <td>
                                            #23
                                        </td>
                                        <td>
                                            Adam Smith
                                        </td>
                                        <td>
                                            Dilhara Perera
                                        </td>
                                        <td>
                                            <span class="text-success font-weight-bold">20500 LKR</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>
                                            # 10
                                        </th>
                                        <td>
                                            #23
                                        </td>
                                        <td>
                                            Jhon Smith
                                        </td>
                                        <td>
                                            Dilhara Perera
                                        </td>
                                        <td>
                                            <span class="text-danger font-weight-bold">20000 LKR</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>
                                            # 12 
                                        </th>
                                        <td>
                                            #3
                                        </td>
                                        <td>
                                            Adam Smith
                                        </td>
                                        <td>
                                            Nuwan Perera
                                        </td>
                                        <td>
                                            <span class="text-success font-weight-bold">1500 LKR</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>
                                            # 11 
                                        </th>
                                        <td>
                                            #23
                                        </td>
                                        <td>
                                            Adam Smith
                                        </td>
                                        <td>
                                            Dilhara Perera
                                        </td>
                                        <td>
                                            <span class="text-success font-weight-bold">20500 LKR</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card card-danger card-outline mt-4">
                        <div class="card-header">
                            <div class="d-flex align-items-center justify-content-between">
                                <h3 class="card-title mb-0 font-weight-bold">
                                    <i class="fas fas fa-boxes"></i>
                                    Latest Products
                                </h3>

                                <a href="{{ route('product.index') }}" class="card-link font-weight-bold text-danger">View More</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-borderless table-hover projects">
                                <thead>
                                    <tr>
                                        <th style="width: 20%" >
                                            Product Id
                                        </th>
                                        <th style="width: 20%">
                                            Product Image
                                        </th>
                                        <th style="width: 20%">
                                            Product Name
                                        </th>
                                        <th style="width: 20%">
                                            Starting Bid Price
                                        </th>
                                        <th style="width: 20%">
                                            Bidding Ends
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                            <th>
                                                # {{$product->id}}
                                            </th>
                                            <td>
                                                <img alt="Avatar" class="table-avatar" src="https://adminlte.io/themes/v3/dist/img/prod-1.jpg">
                                            </td>
                                            <td>
                                                {{$product->product_name}}
                                            </td>
                                            <td>
                                                {{$product->starting_bid_price}}
                                            </td>
                                            <td>
                                                <span class="text-success font-weight-bold">{{$product->bid_ending_date}}</span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center justify-content-between">
                                <h3 class="card-title mb-0 font-weight-bold">
                                    <i class="fas fa-clipboard-list"></i>
                                    Activity Log
                                </h3>

                                <a href="#" class="card-link font-weight-bold">View More</a>
                            </div>
                        </div>
                        <div class="card-body">
                            @foreach($activites as $activity)
                                <!-- Activity Item -->
                                <div class="card card-primary card-outline">
                                    <div class="card-body">
                                        <div class="font-weight-bold">{{$activity->description}}</div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <span class="badge badge-primary">{{$activity->log_name}}</span>
                                            </div>
                                            <div class="font-italic"><i class="far fa-clock"></i> {{$activity->created_at->diffForHumans()}}</div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
            
        </div>
    </div>
@endsection
