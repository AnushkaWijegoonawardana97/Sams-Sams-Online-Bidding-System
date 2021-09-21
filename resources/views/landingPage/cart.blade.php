@extends('landingPage.layouts.master')
@section('title', "Cart - SAMS & SAMS")
@section('content')
@if(Session::has('bid_price'))
    <section class="primary-ccontainer my-5">
        <div class="jumbotron text-center">
            <h1 class="text-dark mb-5">Thank you!</h1>
            
            <p class="lead text-success font-weight-bold">You bid of {{Session::get('bid_price')}}.00 LKR is confirmed for <span class="text-dark">{{Session::get('product')}}</span></p>

            <p class="">Your payment is currently on hold by the system. Since the bidding is ongoing</p>

            <p class="">We will notify if you have won the auction with the highest bid value</p>

            <a href="/shop" class="btn btn-primary">Explore More</a>
        </div>
    </section>
@endif

<section class="primary-ccontainer my-5">
    @foreach($productbids as $productbid)
        <div class="card mb-3">
            <div class="card-body">
                @php
                    $product = App\Product::find($productbid->product_id);
                    $deliveryDetails = App\DeliveryDetails::where('bid_id', $productbid->id)->get();
                @endphp
                <h5 class="card-title">{{$product->product_name}}</h5>
            
                <p class="card-text"><span class="text-muted font-weight-bold">Shipping Address: </span>{{$deliveryDetails[0]->address_line1}} {{$deliveryDetails[0]->address_line2}} {{$deliveryDetails[0]->city}} {{$deliveryDetails[0]->district}} {{$deliveryDetails[0]->zip_code}}</p>

                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex align-items-center justif-content-between">
                        <span class="font-weight-bold mr-2">Bidding Amount : </span> {{$productbid->bid_price}}.00 LKR
                    </li>
                </ul>

                <div class="d-flex align-items-center justify-content-end">
                    <form action="{{ route('productbid.delete', $productbid->id) }}" method="post">
                        @csrf
                        {{ method_field('delete') }}
                        <button class="btn btn-danger btn-sm" type="submit">
                            <i class="fas fa-trash">
                        </i>
                        Cancle My Bid
                        </button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</section>
@endsection
