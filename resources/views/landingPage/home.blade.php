@extends('landingPage.layouts.master')

@section('content')
    <!-- Homepage Hero Slider -->
    <section class="hero-slider primary-section-padding text-center" id="home-hero-slider">
        Hero Slider Section
    </section>

    <!-- Homepahe Features Section -->
    <section class="primary-section-padding text-center" id="">
        Features Section
    </section>

    <!-- Latest Auctions -->
    <section class="product-list-container text-center primary-ccontainer primary-section-padding" id="product-list-container">
        <!-- Product List Container Header -->
        <div class="section-header">
            <h2>Latest Auctions</h2>
            <div class="header-sperator"><i class="fas fa-gavel"></i></div>
        </div>

        <!-- Product List Grid -->
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
    </section>

    <!-- Section Information Banner -->
    <section class="primary-section-padding text-center" id="">
        Section Information Banner
    </section>

    <!-- Category Slider -->
    <section class="primary-section-padding text-center" id="">
        Category Slider
    </section>

    <!-- Auctions Ending Soon -->
    <section class="product-list-container text-center primary-ccontainer primary-section-padding" id="product-list-container">
        <!-- Product List Container Header -->
        <div class="section-header">
            <h2>Ending Soon</h2>
            <div class="header-sperator"><i class="fas fa-gavel"></i></div>
        </div>

        <!-- Product List Grid -->
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
    </section>

    <!-- Seller Register Banner -->
    <section class="primary-section-padding text-center" id="">
        Seller Register Banner
    </section>
@endsection
