@extends('landingPage.layouts.master')
@section('title', 'Account Settings - SAMS & SAMS')
@section('content')
<section class="primary-ccontainer text-center my-5">
    <div class="section-header">
        <h2>Account Settings</h2>
        <div class="header-sperator"><i class="fas fa-gavel"></i></div>
    </div>
</section>
<section class="primary-ccontainer my-5">
    <div class="row">
        @php
            $user = Auth::user();
        @endphp
        {{$user}}
        <div class="col-md-8">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$user->name}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            Profile Details
        </div>
    </div>
</section>
@endsection