@extends('landingPage.layouts.master')

@section('content')
    <section class="primary-ccontainer my-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/shop">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">E-tel iPC Intel Core i5 Mini Computer - 8GB RAM + 512GB SSD Hard</li>
            </ol>
        </nav>
    </section>
    
    
    <section class="primary-ccontainer">
        <div class="row">
            <div class="col-md-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100 product-image" width="500" src="{{asset('img/product-image-01.webp')}}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 product-image" width="500" src="{{asset('img/product-image-02.webp')}}" alt="Second slide">
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
            </div>

            <div class="col-md-6">
                <h2 class="text-dark">Asus Expertbook B1500CE - i5 11th Gen - 15.6″ FHD - 8GB RAM - 1TB HDD - Win 10 Pro</h2>

                <div class="lead text-muted my-5">
                    <p>Product details of Asus Expertbook B1500CE - i5 11th Gen - 15.6″ FHD - 8GB RAM - 1TB HDD - Win 10 Pro</p>
                    
                    <ul>
                        <li>– Intel Core i5-1135G7 Processor</li>
                        <li>– 8GB DDR4</li>
                        <li>– 1TB Hard Drive</li>
                        <li>– Intel UHD Graphics</li>
                        <li>– 15.6-inch FHD Display</li>
                        <li>– Win 10 Pro</li>
                    </ul>
                    
                    <p><span class="font-weight-bold">Processor :</span> Intel Core i5-1135G7 Processor 2.8 GHz (12M Cache, up to 4.7 GHz, 4 cores)</p>
                    <p><span class="font-weight-bold">Color</span> Star Black</p>
                    <p><span class="font-weight-bold">Storage</span> 1TB SATA 5400RPM 2.5″ HDD</p>
                    <p><span class="font-weight-bold">Memory</span> 8GB DDR4 on board,Memory Max Up to:48GB</p>
                    <p><span class="font-weight-bold">Graphics</span> Intel UHD Graphics</p>
                </div>

                <hr>

                <div class="mt-5">
                    <h3 class="text-dark mb-4">Current Highest Bid : <span class="text-primary font-weight-bold">220,000 LKR</span></h3>

                    <div class="alert alert-primary mb-4" role="alert">
                        Minimum bid value is 2000
                    </div>

                    <form>
                        <div class="form-row mx-auto">
                            <div class="col-md-4"><p class="lead">Make Your Bid</p></div>
                            <div class="col-md-4">
                                <input type="number" class="form-control" min="20000" value="220000" step="2000">
                            </div>
                            <div class="col-md-4">
                                <a href="" class="btn btn-primary btn-block">Confirm Your Bid</a>
                                <!-- <input type="button" class="btn btn-primary btn-block" value="Confirm Your Bid"> -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest Auctions -->
    <section class="product-list-container text-center primary-ccontainer primary-section-padding" id="product-list-container">
        <!-- Product List Container Header -->
        <div class="section-header">
            <h2>Related Products</h2>
            <div class="header-sperator"><i class="fas fa-gavel"></i></div>
        </div>

        <!-- Product List Grid -->
        <div class="product-list-grid">
            @foreach($products as $product)
                @if(!$product->isExpiredBid())
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
                                    <!-- <div class="bidend-item d-flex aligin-items-center justify-content-center">
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
                                    </div> -->
                                    {{$product->bid_ending_date}}
                                </div>
                            </div>
                        </a>

                        <div class="prdouct-card-content">
                            <a href="#" class="product-title">{{str_limit($product->product_name, 20)}}</a>
                            <div class="product-bid">
                                Current Bid : <span class="bid-amount">{{$product->starting_bid_price}}</span>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </section>
@endsection