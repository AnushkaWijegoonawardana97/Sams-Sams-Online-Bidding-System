@extends('landingPage.layouts.master')

@section('content')
<section class="product-list-container text-center primary-ccontainer primary-section-padding" id="product-list-container">
    <!-- Product List Grid -->
        <div class="product-list-grid">
            @foreach($products as $product)
                <!-- Product Card -->
                <div class="product-card" id="product-card">
                    <div class="product-card-icons">
                        <a href="#" class="pci-bid-now d-flex align-items-center justify-content-center"><i class="fas fa-gavel"></i></a>
                        <a href="#" class="pci-bid-fav d-flex align-items-center justify-content-center"><i class="fas fa-heart"></i></a>
                    </div>

                    <a href="{{route('landing.product', $product->id)}}">
                        <div class="product-card-img">
                            <img src="{{asset('img/product-img.jpg')}}" alt="" width="300" height="300">

                            <div class="bid-ends d-flex align-items-center justify-content-center">
                                <div class="bidend-item d-flex aligin-items-center justify-content-center">
                                    <span class="bidend-item-value">12</span> D
                                </div>

                                <div class="bidend-item d-flex aligin-items-center justify-content-center">
                                    <span class="bidend-item-value">4</span> H
                                </div>

                                <div class="bidend-item d-flex aligin-items-center justify-content-center">
                                    <span class="bidend-item-value">6</span> M
                                </div>

                                <div class="bidend-item d-flex aligin-items-center justify-content-center">
                                    <span class="bidend-item-value">45</span> S
                                </div>
                            </div>
                        </div>
                    </a>

                    <div class="prdouct-card-content">
                        <a href="#" class="product-title">{{str_limit($product->product_name, 20)}}</a>
                        <div class="product-bid">
                            Current Bid : <span class="bid-amount">LKR 1000.00</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
</section>
@endsection