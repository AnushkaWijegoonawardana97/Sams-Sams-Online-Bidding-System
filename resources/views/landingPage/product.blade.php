@extends('landingPage.layouts.master')

@section('content')
    <section id="product-page-details" class="primary-ccontainer primary-section-padding">
        <div class="row">
            <div class="col-md-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('img/product-img.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                        
                        <div class="carousel-item">
                        <img src="{{asset('img/product-img.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="{{asset('img/product-img.jpg')}}" class="d-block w-100" alt="...">
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
                <h2 class="font-weight-bold">{{$product->product_name}}</h2>

                <p>{{$product->special_product_notes}}</p>

                {{$bidends}}
            </div>
        </div>
    </section>
@endsection