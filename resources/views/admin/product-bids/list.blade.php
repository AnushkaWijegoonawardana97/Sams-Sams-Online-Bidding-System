@extends('admin.layouts.master')

@section('title', config('app.name'). ' Dashboard | Product Biddings')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Available Product List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('product_bids.index') }}">Product Bids</a></li>
                        <li class="breadcrumb-item active">Product List</li>
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
            
            <div class="row">
                @foreach($products as $product)
                    @if(!$product->isExpiredBid())
                        <div class="col-md-6">
                            <div class="card card-primary card-outline">
                                <div class="card-body d-flex align-items-center" style="height: 100%;">
                                    <div class="mr-4 w-25">
                                        @if($product->product_images)
                                            @php
                                                $prodImages = explode('|', $product->product_images);
                                            @endphp
                                        @endif
                                        <img src="{{asset($prodImages[0])}}" width="200" class="img-fluid">
                                    </div>
                                    
                                    <div class="w-75 d-flex flex-column" style="height: 100%;">
                                        <div class="font-weight-bold mb-3">{{$product->product_name}}</div>

                                        <div class="d-flex align-items-center justify-content-between mb-auto">
                                            <div>
                                                <span class="font-italic"><i class="far fa-clock"></i> {{$product->bid_ending_date}}  </span>
                                            </div>
                                            <div>
                                                <span class="font-italic text-success font-weight-bold"><i class="fas fa-tags"></i> {{$product->starting_bid_price}} LKR </span>
                                            </div>
                                        </div>

                                        <div class="mt-4">
                                            <a href="{{ route('product_bids.create', $product->id) }}" class="ml-auto btn-block btn btn-info text-center"> <i class="fas fa-gavel mr-3"></i> Place a Bid</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@endsection

@section('additional-scripts')
<script>
    
</script>
@endsection