@extends('landingPage.layouts.master')
@section('title', 'Homepage - SAMS & SAMS')
@section('content')
    <!-- Homepage Hero Slider -->
    <section class="hero-slider text-center" id="home-hero-slider">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset('img/Banner-Image-01.png')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('img/Banner-Image-02.png')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('img/Banner-Image-04.png')}}" alt="Third slide">
                </div>
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
    </section>

    <!-- Homepahe Features Section -->
    <!-- <section class="primary-ccontainer primary-section-padding text-center pb-0" id="">
        <div class="d-flex align-items-center justify-content-between" id="featuredBox">
            <div class="mx-4 d-flex align-items-center justify-content-start border border-primary p-3 rounded">
                <i class="fas fa-truck fa-4x text-primary mr-4"></i>
                <p class="lead font-weight-bold mb-0 text-muted">Island Wide Delivery</p>
            </div>

            <div class="mx-4 d-flex align-items-center justify-content-start border border-primary p-3 rounded">
                <i class="fas fa-headset fa-4x text-primary mr-4"></i>
                <p class="lead font-weight-bold mb-0 text-muted">24/7 Helping Center</p>
            </div>

            <div class="mx-4 d-flex align-items-center justify-content-start border border-primary p-3 rounded">
                <i class="fas fa-money-check-alt fa-4x text-primary mr-4"></i>
                <p class="lead font-weight-bold mb-0 text-muted">Secure Online Payments</p>
            </div>

            <div class="mx-4 d-flex align-items-center justify-content-start border border-primary p-3 rounded">
                <i class="fas fa-certificate fa-4x text-primary mr-4"></i>
                <p class="lead font-weight-bold mb-0 text-muted">Certified By The Government</p>
            </div>
        </div>
    </section> -->

    <!-- Latest Auctions -->
    <section class="product-list-container text-center primary-ccontainer primary-section-padding" id="product-list-container">
        <!-- Product List Container Header -->
        <div class="section-header">
            <h2>Latest Auctions</h2>
            <div class="header-sperator"><i class="fas fa-gavel"></i></div>
        </div>

        <!-- Product List Grid -->
        <div class="product-list-grid">
            @foreach($latestproducts as $product)
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
    </section>

    <!-- Featured Auctions -->
    <section class="product-list-container text-center primary-ccontainer primary-section-padding primary-section-padding-notop" id="product-list-container">
        <!-- Product List Container Header -->
        <div class="section-header">
            <h2>Featured Auctions</h2>
            <div class="header-sperator"><i class="fas fa-gavel"></i></div>
        </div>

        <!-- Product List Grid -->
        <div class="product-list-grid">
            @foreach($featuredProducts as $product)
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
    </section>

    <!-- Section Information Banner -->
    <!-- <section class="primary-section-padding text-center" id="">
        Section Information Banner
    </section> -->

    <!-- Category Slider -->
    <!-- <section class="primary-section-padding text-center" id="">
        Category Slider
    </section> -->

    <!-- Auctions Ending Soon -->
    <section class="product-list-container text-center primary-ccontainer primary-section-padding" id="product-list-container">
        <!-- Product List Container Header -->
        <div class="section-header">
            <h2>Ending Soon</h2>
            <div class="header-sperator"><i class="fas fa-gavel"></i></div>
        </div>

        <!-- Product List Grid -->
        <div class="product-list-grid">
            @foreach($bidendingproducts as $product)
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
    </section>

    <!-- Seller Register Banner -->
    <!-- <section class="primary-section-padding text-center" id="">
        Seller Register Banner
    </section> -->
@endsection

@section('additional-scripts')
    <script>
        $('.carousel').carousel({
            interval: 2000
        })
    </script>
@endsection