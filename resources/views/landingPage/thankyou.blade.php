@extends('landingPage.layouts.master')

@section('content')
    @if(Session::has('message'))
        {{Session::get('message')}}
    @endif

    <section class="primary-ccontainer primary-section-padding text-center">
        <h1 class="text-dark mb-5">Thank you!</h1>
            <p class="lead text-success font-weight-bold">You bid of 250,000 LKR is confirmed for <span class="text-dark">Asus Expertbook B1500CE - i5 11th Gen - 15.6″ FHD - 8GB RAM - 1TB HDD - Win 10 Pro
</span></p>
            <p class="">Your payment is currently on hold by the system. Since the bidding is ongoing</p>
            <p class="">We will notify if you have won the auction with the highest bid value</p>

            <a href="/shop" class="btn btn-primary">Explore More</a>
    </section>
@endsection