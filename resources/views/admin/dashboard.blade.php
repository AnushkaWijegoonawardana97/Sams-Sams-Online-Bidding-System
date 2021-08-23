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
