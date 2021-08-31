@extends('admin.layouts.master')

@section('title', config('app.name'). ' Dashboard | Product Inspections')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Create Product Inspections Times</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('product_inspection.index') }}">Product Inspections Time</a></li>
                        <li class="breadcrumb-item active">Create</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            @if(Session::has('message'))
                <div class="alert alert-dismissible fade show {{Session::get('class')}}" role="alert">
                    <strong>{{Session::get('message')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <a href="{{ route('product_inspection.create') }}" class="btn btn-success mb-4">Create a new product inspection time</a>
            
            @foreach($inspections as $inspection)
                @if(!$inspection->isExpiredInspection())
                    @php
                        $product = App\Product::find($inspection->product_id);
                    @endphp
                    @if($inspection->inspection_status == "Not Booked")
                        <div class="callout callout-info">
                            <h5><i class="fas fa-calendar-alt"></i> Free Inspection Time Slot from <span class="font-weight-bold">{{$inspection->inspection_start_time}}</span> to <span class="font-weight-bold">{{$inspection->inspection_end_time}}</span></h5>
                            <p class="mb-1">
                                <span class="font-weight-bold">Product : </span><span class="font-italic">{{$product->product_name}}</span>
                            </p>
                            <p class="mb-1">
                                <span class="font-weight-bold">Address : </span><span class="font-italic">{{$inspection->inspection_address}}</span>
                            </p>
                            <p class="mb-1">
                                <span class="font-weight-bold">Notes : </span><span class="font-italic">{{$inspection->inspection_notes}}</span>
                            </p>

                            <div class="d-flex">
                                <a class="btn btn-warning btn-sm mr-3 " href="{{ route('product_inspection.show', $inspection->id) }}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>

                                <form action="{{ route('product_inspection.delete', $inspection->id) }}" method="post">
                                    @csrf
                                    {{ method_field('delete') }}
                                    <button class="btn btn-danger btn-sm" type="submit">
                                        <i class="fas fa-trash">
                                    </i>
                                    Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    @else
                        @php
                            $byuer = App\Buyer::find($inspection->buyer_id);
                        @endphp
                        <div class="callout callout-success">
                            <h5><i class="fas fa-calendar-alt"></i> This time slot is booked by <span class="font-weight-bold">{{$byuer->first_name." ".$byuer->last_name}}</span></h5>
                            <p class="mb-1">
                                From <span class="font-weight-bold">{{$inspection->inspection_start_time}}</span> To <span class="font-weight-bold">{{$inspection->inspection_end_time}}</span>
                            </p>
                            <p class="mb-1">
                                <span class="font-weight-bold">Product : </span><span class="font-italic">{{$product->product_name}}</span>
                            </p>
                            <p class="mb-1">
                                <span class="font-weight-bold">Address : </span><span class="font-italic">{{$inspection->inspection_address}}</span>
                            </p>
                            <p class="mb-1">
                                <span class="font-weight-bold">Notes : </span><span class="font-italic">{{$inspection->inspection_notes}}</span>
                            </p>
                        </div>
                    @endif
                @endif
            @endforeach
        </div>
    </section>
@endsection
