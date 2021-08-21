@extends('landingPage.layouts.master')

@section('content')
<section class="product-list-container text-center primary-ccontainer primary-section-padding" id="product-list-container">

<div class="filter-card" id="filter-card">
        <!-- Navbar Category Button -->
        <div class="slide-left">
            <div class="dropdown">
                <button class="btn btn-theme-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Categories
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Electronic</a>
                    <a class="dropdown-item" href="#">Vehicles</a>
                    <a class="dropdown-item" href="#">Services</a>
                </div>
            </div>
        </div>
</div>
<br>

<div class="product-list-grid">

    <!-- Product Card -->
    <div class="product-card" id="product-card">
                <div class="product-card-icons">
                    <a href="#" class="pci-bid-now d-flex align-items-center justify-content-center"><i class="fas fa-gavel"></i></a>
                    <a href="#" class="pci-bid-fav d-flex align-items-center justify-content-center"><i class="fas fa-heart"></i></a>
                </div>

                <a href="">
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
                    <a href="#" class="product-title">Product name</a>
                    <div class="product-bid">
                        Current Bid : <span class="bid-amount">LKR 1000.00</span>
                    </div>
                </div>
            </div>

            <!-- Product Card -->
    <div class="product-card" id="product-card">
                <div class="product-card-icons">
                    <a href="#" class="pci-bid-now d-flex align-items-center justify-content-center"><i class="fas fa-gavel"></i></a>
                    <a href="#" class="pci-bid-fav d-flex align-items-center justify-content-center"><i class="fas fa-heart"></i></a>
                </div>

                <a href="">
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
                    <a href="#" class="product-title">Product name</a>
                    <div class="product-bid">
                        Current Bid : <span class="bid-amount">LKR 1000.00</span>
                    </div>
                </div>
            </div>

            <!-- Product Card -->
    <div class="product-card" id="product-card">
                <div class="product-card-icons">
                    <a href="#" class="pci-bid-now d-flex align-items-center justify-content-center"><i class="fas fa-gavel"></i></a>
                    <a href="#" class="pci-bid-fav d-flex align-items-center justify-content-center"><i class="fas fa-heart"></i></a>
                </div>

                <a href="">
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
                    <a href="#" class="product-title">Product name</a>
                    <div class="product-bid">
                        Current Bid : <span class="bid-amount">LKR 1000.00</span>
                    </div>
                </div>
            </div>

            <!-- Product Card -->
    <div class="product-card" id="product-card">
                <div class="product-card-icons">
                    <a href="#" class="pci-bid-now d-flex align-items-center justify-content-center"><i class="fas fa-gavel"></i></a>
                    <a href="#" class="pci-bid-fav d-flex align-items-center justify-content-center"><i class="fas fa-heart"></i></a>
                </div>

                <a href="">
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
                    <a href="#" class="product-title">Product name</a>
                    <div class="product-bid">
                        Current Bid : <span class="bid-amount">LKR 1000.00</span>
                    </div>
                </div>
            </div>

            
</div>
</div>


@endsection