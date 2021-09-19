@extends('landingPage.layouts.master')
@section('title', "{$category[0]->category_name} - SAMS & SAMS")
@section('content')
    <section class="text-center primary-ccontainer primary-section-padding pb-0">
        <div class="section-header mb-0">
            <h2>{{$category[0]->category_name}}</h2>
            <div class="header-sperator"><i class="fas fa-gavel"></i></div>
        </div>
    </section>

    <section class="product-list-container text-center primary-ccontainer primary-section-padding" id="product-list-container">
        @if(count($products) == 0)
            <div class="card border-info mx-auto" style="min-width: 18rem;">
                <div class="card-body text-info">
                    <h5 class="card-title mb-0 "><i class="fas fa-info-circle mr-2"></i> No products are avilable for this <span class="font-italic">{{$category[0]->category_name}}</span> category</h5>
                </div>
            </div>
        @else
            <!-- Product List Grid -->
            <div class="product-list-grid">
                @foreach($products as $product)
                    @if(!$product->isExpiredBid())
                        <!-- Product Card -->
                        <div class="product-card" id="product-card">
                            <div class="product-card-icons">
                                <a href="{{route('landing.product', str_replace(' ', '-', $product->product_name))}}" class="pci-bid-now d-flex align-items-center justify-content-center"><i class="fas fa-gavel"></i></a>
                                <!-- <a href="#" class="pci-bid-fav d-flex align-items-center justify-content-center"><i class="fas fa-heart"></i></a> -->
                            </div>

                            <a href="{{route('landing.product', str_replace(' ', '-', $product->product_name))}}">
                                <div class="product-card-img">
                                    @if($product->product_images)
                                        @php
                                            $prodImages = explode('|', $product->product_images);
                                        @endphp
                                    @endif
                                    <img src="{{asset($prodImages[0])}}" alt="{{$product->product_name}}" width="300" height="300">

                                    @if(strpos(\Carbon\Carbon::parse($product->bid_ending_date)->diffForHumans(), "hours"))
                                        <div class="bid-ends text-center font-weight-bold text-warning"><i class="fas fa-clock mr-2"></i>
                                            {{ \Carbon\Carbon::parse($product->bid_ending_date)->diffForHumans() }}
                                        </div>
                                    @elseif(strpos(\Carbon\Carbon::parse($product->bid_ending_date)->diffForHumans(), "minutes"))
                                        <div class="bid-ends text-center font-weight-bold text-danger"><i class="fas fa-clock mr-2"></i>
                                            {{ \Carbon\Carbon::parse($product->bid_ending_date)->diffForHumans() }}
                                        </div>
                                    @else
                                        <div class="bid-ends text-center font-weight-bold text-primary"><i class="fas fa-clock mr-2"></i>
                                            {{ \Carbon\Carbon::parse($product->bid_ending_date)->diffForHumans() }}
                                        </div>
                                    @endif
                                </div>
                            </a>

                            <div class="prdouct-card-content">
                                <a href="{{route('landing.product', str_replace(' ', '-', $product->product_name))}}" class="product-title">{{$product->product_name}}</a>
                                @php
                                    $productBidarray = array();
                                    foreach($productbids as $productbid)  {
                                        if($product->id == $productbid->product_id) {
                                            $productBidarray[] = $productbid->bid_price;
                                        }
                                    }

                                    if(count($productBidarray) != 0) {
                                        $maxbid = max($productBidarray);
                                    }else {
                                        $maxbid = "";
                                    }
                                @endphp
                                <div class="product-bid mt-3">
                                    Current Bid : <span class="bid-amount">@if($maxbid) {{$maxbid}} @else {{$product->starting_bid_price}} @endif LKR</span>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        @endif
        
    </section>
@endsection