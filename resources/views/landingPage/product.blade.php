@extends('landingPage.layouts.master')

@section('content')
    <section class="primary-ccontainer my-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/shop">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$product->product_name}}</li>
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
                        @if($product->product_images)
                            @php
                                $prodImages = explode('|', $product->product_images);
                            @endphp
                            @foreach($prodImages as $key=>$value)
                                <div class="carousel-item @if($key === 0) active @endif">
                                    <img class="d-block w-100 product-image" width="500" src="{{asset($value)}}" alt="{{$product->product_name}}">
                                </div>
                            @endforeach
                        @endif
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
                <h2 class="text-dark">{{$product->product_name}}</h2>

                <div class="text-muted my-5">
                    {!! $product->product_description !!}
                </div>

                <hr>

                <div class="mt-5">
                    <h3 class="text-dark mb-5 text-center">Current Highest Bid : <span class="text-primary font-weight-bold">@if($productbids) {{$productbids}} @else {{$product->starting_bid_price}}  @endif LKR</span></h3>

                    <div>
                        @if(Auth::check()) 
                            @hasanyrole('buyer')
                                <div class="form-row mx-auto" id="createaBidForm" novalidate="novalidate" action="{{ route('product_bids.store') }}" method="POST">
                                    @csrf
                                    <div class="col-md-3"><p class="lead">Make Your Bid</p></div>
                                    <div class="input-group mb-3 col-md-5">
                                        <div class="input-group-prepend ">
                                            <button id="minusPrice" class="btn btn-outline-secondary" type="button"><i class="fas fa-minus"></i></button>
                                        </div>

                                        @php
                                            $bidValue = "0";
                                            if($productbids) {
                                                $bidValue = $productbids;
                                            } else {
                                                $bidValue = $product->starting_bid_price;
                                            }
                                        @endphp
                                        
                                        <input type="number" id="currentBidValue" class="form-control text-center" min="{{$bidValue}}" value="{{$bidValue}}" step="{{$product->min_bid_price}}">
                                        <div class="input-group-append">
                                            <button id="addPrice" class="btn btn-outline-secondary" type="button"><i class="fas fa-plus"></i></button>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-primary btn-block">Confirm Your Bid</button>
                                    </div>  
                                </div>
                            @endhasanyrole
                            @hasanyrole('seller')
                                <div class="mx-auto text-center">
                                    <p class="mt-3 text-info"><i class="fas fa-info-circle"></i> You are not aligible for bidding for the products</p>
                                </div>
                            @endhasanyrole
                            @hasanyrole('delivery')
                                <div class="mx-auto text-center">
                                    <p class="mt-3 text-info"><i class="fas fa-info-circle"></i> You are not aligible for bidding for the products</p>
                                </div>
                            @endhasanyrole
                            @hasanyrole('super_admin')
                                <div class="mx-auto text-center">
                                    <p class="mt-3 text-info"><i class="fas fa-info-circle"></i> Please vist the <a href="{{route('admin.dashboard')}}">admin dashboard</a> to place a bidding as an admin</p>
                                </div>
                            @endhasanyrole
                        @else
                            <div class="mx-auto text-center">
                                <a href="{{ route('login') }}" class="btn btn-theme-primary">Login</a>
                                <p class="mt-3 text-primary"><i class="fas fa-info-circle"></i> Login as a buyer for palce your bid</p>
                            </div>
                        @endif  
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="primary-ccontainer py-5">
        <div class="container">
            <ul class="nav nav-pills nav-justified">
                <li class="nav-item">
                    <a data-toggle="pill" class="nav-link active" href="#addtionalInfo">Additional Information</a>
                </li>
                <li class="nav-item">
                    <a data-toggle="pill" class="nav-link" href="#lastestBids">Latest Biddings</a>
                </li>
                <li class="nav-item">
                    <a data-toggle="pill" class="nav-link" href="#reviews">Reviews</a>
                </li>
            </ul>
            
            <div class="tab-content pt-5 pb-3">
                <div id="addtionalInfo" class="tab-pane fade in active show text-italic">`
                    @if($product->special_product_notes)
                        {!! $product->special_product_notes !!}
                    @else
                        <p class="font-italic text-center text-info lead"><i class="fas fa-info-circle mr-2"></i> There are no addtional product details for this product</p>
                    @endif
                </div>

                <div id="lastestBids" class="tab-pane fade">
                    <div class="w-75 mx-auto">
                        <div class="row">
                            @foreach($allBids as $bid)
                                @php
                                    $buyer_name = App\Buyer::where('id', $bid->buyer_id)->get();
                                @endphp
                                <div class="col-md-6 mb-2">
                                    <div class="alert @if($productbids <= $bid->bid_price) alert-success @else alert-warning @endif" role="alert">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span class="mb-0"><strong>{{$buyer_name[0]->first_name}} {{$buyer_name[0]->last_name}}</strong></span>
                                            <sapn class="mb-0 font-italic">{{$bid->bid_price}} LKR</sa>
                                        </div>
                                        <span class="mb-0">{{ \Carbon\Carbon::parse($bid->created_at)->diffForHumans() }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div id="reviews" class="tab-pane fade">
                    <div class="w-75 mx-auto">
                        <!-- <div class="card">
                            <div class="card-body">
                                This is some text within a card body.
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest Auctions -->
    <section class="product-list-container text-center primary-ccontainer primary-section-padding pt-0" id="product-list-container">
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
                            <a href="{{route('landing.product', str_replace(' ', '-', $product->product_name))}}" class="pci-bid-now d-flex align-items-center justify-content-center"><i class="fas fa-gavel"></i></a>
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
                                foreach($productbidslist as $productbid)  {
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
@endsection

@section('additional-scripts')
    <script>
        var minBidPrice = {!! json_encode($product->min_bid_price) !!};
        var currentHighest = parseInt(document.getElementById('currentBidValue').value);

        document.getElementById("addPrice").addEventListener("click", () => {
            var value = parseInt(document.getElementById('currentBidValue').value);
            value = isNaN(value) ? 0 : value;
            value = value + parseInt(minBidPrice);
            document.getElementById('currentBidValue').value = value;
        })
        document.getElementById("minusPrice").addEventListener("click", () => {
            var value = parseInt(document.getElementById('currentBidValue').value);
            value = isNaN(value) ? 0 : value;
            value = value - parseInt(minBidPrice);

            if(currentHighest > value) {
            } else {
                document.getElementById('currentBidValue').value = value;
            }
        })
    </script>
@endsection