@extends('landingPage.layouts.master')
@section('title', "Checkout Form - SAMS & SAMS")
@section('content')
@php
    $deliveryCharges = rand(100,500);
    $cartTotal = $bidValue + $deliveryCharges;
@endphp

<section class="text-center primary-ccontainer primary-section-padding pb-0">
    <div class="section-header mb-0">
        <h2>Checkout form</h2>
        <div class="header-sperator"><i class="fas fa-gavel"></i></div>
    </div>
    <div class="lead">Fill up the below form with your details to confirm the bid</div>
</section>

<section class="primary-ccontainer primary-section-padding">
    <div class="row">
        <div class="col-md-7 mr-auto">
            <form  novalidate="novalidate" action="{{ route('productbid.create') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="first_name">First name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" value="{{$buyer->first_name}}" readonly>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="last_name">Last name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" value="{{$buyer->last_name}}" readonly>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{$buyer->email}}" readonly>
                </div>

                <hr class="my-4">
                <h4 class="mb-4">Residential Address</h4>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="address_line1">Address Line 1</label>
                        <input type="text" class="form-control" id="first_name" name="address_line1" value="{{$buyer_address->address_line1}}" readonly>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="address_line2">Address Line 2</label>
                        <input type="text" class="form-control" id="address_line2" name="address_line2" value="{{$buyer_address->address_line2  }}" readonly>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city" name="city" value="{{$buyer_address->city}}" readonly>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="district">District</label>
                        <input type="text" class="form-control" id="district" name="district" value="{{$buyer_address->district  }}" readonly>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="zip_code">Zip Code</label>
                        <input type="text" class="form-control" id="zip_code" name="zip_code" value="{{$buyer_address->zip_code  }}" readonly>
                    </div>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="delivery_address" name="delivery_address">
                    <label class="form-check-label" for="delivery_address">Deliver to my shipping address</label>
                </div>

                <div id="shipping-address" class="d-none">
                    <hr class="my-4">
                    <h4 class="mb-4">Shipping Address</h4>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="shipaddress_line1">Address Line 1</label>
                            <input type="text" class="form-control" id="shipaddress_line1" name="shipaddress_line1" value="">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="shipaddress_line2">Address Line 2</label>
                            <input type="text" class="form-control" id="shipaddress_line2" name="shipaddress_line2" value="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="shipcity">City</label>
                            <input type="text" class="form-control" id="shipcity" name="shipcity" value="">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="shipdistrict">District</label>
                            <input type="text" class="form-control" id="shipdistrict" name="shipdistrict" value="">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="shipzip_code">Zip Code</label>
                            <input type="text" class="form-control" id="shipzip_code" name="shipzip_code" value="">
                        </div>
                    </div>

                    <input type="hidden" name="product_id" value="{{$product->id}}">
                    <input type="hidden" name=" " value="{{$product->product_name}}">
                    <input type="hidden" name="bid_price" value="{{$bidValue}}">
                    <input type="hidden" name="delivery_charges" value="{{$deliveryCharges}}">
                    <input type="hidden" name="buyer_id" value="{{$buyer->id}}">
                </div>

                <button class="btn btn-primary btn-lg btn-block mt-5" type="submit">Continue to checkout</button>
            </form>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-3">Your Bidding Order</h5>
                    
                    <div class="row mx-0 mb-3">
                        <div id="carouselExampleSlidesOnly" class="carousel slide col-4" data-ride="carousel">
                            <div class="carousel-inner">
                                @if($product->product_images)
                                    @php
                                        $prodImages = explode('|', $product->product_images);
                                    @endphp
                                    @foreach($prodImages as $key=>$value)
                                        <div class="carousel-item @if($key === 0) active @endif">
                                            <img class="d-block w-100 product-image" width="50" src="{{asset($value)}}" alt="{{$product->product_name}}">
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>

                        <div class="col-8 align-self-center">
                            <p class="card-text text-primary font-weight-bold">{{$product->product_name}}</p>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="p-2 list-group-item d-flex align-items-center justify-content-between">
                            <span class="text-muted"><small>Subtotal</small></span>
                            <span class="text-dark">{{$bidValue}}.00 LKR</span>
                        </li>
                        <li class="p-2 list-group-item d-flex align-items-center justify-content-between">
                            <span class="text-muted"><small>Delivery Chagres</small></span>
                            <span class="">{{$deliveryCharges}}.00 LKR</span>
                        </li>
                    </ul>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <span class="text-dark font-weight-bold">Total</span>
                    <span class="text-dark font-weight-bold">{{$cartTotal}}.00 LKR</span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('additional-scripts')
    <script>
        document.getElementById('delivery_address').addEventListener('click', (e) => {
            // e.preventDefault();
            console.log("checked");

            if(document.getElementById('delivery_address').checked) {
                document.getElementById('shipping-address').classList.remove('d-none');
                document.getElementById('shipping-address').classList.add('d-block');
            } else {
                document.getElementById('shipping-address').classList.remove('d-block');
                document.getElementById('shipping-address').classList.add('d-none');
            }
        })
        
    </script>
@endsection