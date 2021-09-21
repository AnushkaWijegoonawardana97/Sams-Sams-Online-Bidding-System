@extends('admin.layouts.master')

@section('title', config('app.name'). ' Dashboard | Product Biddings')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Product Biddings</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('product_bids.index') }}">Product Biddings</a></li>
                        <li class="breadcrumb-item active">View All</li>
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

            <a href="{{ route('product_bids.list') }}" class="btn btn-success mb-3">Place a New Bid</a>

            <div class="card">
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th style="width: 10%" >
                                    Bid ID
                                </th>
                                <th style="width: 10%">
                                    Bid Price
                                </th>
                                <th style="width: 40%">
                                    Product Name
                                </th>
                                <th style="width: 10%">
                                    Buyer Name
                                </th>
                                <!-- <th style="width: 20%">
                                </th> -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($productbids as $productbid)
                                <!-- isExpiredBid -->
                                @php
                                    $product = DB::table('products')->where('id', '=', $productbid->product_id)->get();
                                @endphp
                                @if(! Carbon\Carbon::now()->gte(Carbon\Carbon::parse($product[0]->bid_ending_date)))
                                    <tr>
                                        <th>
                                            # {{$productbid->id}} 
                                        </th>

                                        <td class="font-weight-bold">
                                            @php
                                                $maxBidPrice = DB::table('product_bids')->where('product_id', '=', $productbid->product_id)->max('bid_price');
                                            @endphp
                                            @if($maxBidPrice > $productbid->bid_price)
                                                <span class="text-danger">{{$productbid->bid_price}} LKR</span>
                                            @else
                                                <span class="text-success">{{$productbid->bid_price}} LKR</span>
                                            @endif
                                        </td>

                                        <td> 
                                            {{$product[0]->product_name}} 
                                        </td>

                                        <td>
                                            @php
                                                $buyer = DB::table('buyers')->where('id', '=', $productbid->buyer_id)->get();
                                            @endphp
                                            {{$buyer[0]->first_name. " " . $buyer[0]->last_name}} 
                                        </td>


                                        <!-- <td class="project-actions text-right d-flex align-items-center justify-content-center">
                                            <form action="{{ route('product_bids.delete', $productbid->id) }}" method="post">
                                                @csrf
                                                {{ method_field('delete') }}
                                                <button class="btn btn-danger btn-sm" type="submit">
                                                    <i class="fas fa-ban">
                                                </i>
                                                Cancle Bid
                                                </button>
                                            </form>
                                        </td> -->
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
@endsection
