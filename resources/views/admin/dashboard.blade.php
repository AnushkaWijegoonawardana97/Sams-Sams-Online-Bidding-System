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
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>

                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the card's
                                content.
                            </p>

                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>

                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>

                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the card's
                                content.
                            </p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div><!-- /.card -->
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
