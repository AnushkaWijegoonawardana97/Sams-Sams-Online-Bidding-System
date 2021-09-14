@extends('landingPage.layouts.master')

@section('content')
<section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 m-auto">
                <div style="width: 100%"><iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=500&amp;hl=en&amp;q=colombo%20+(Sams%20&amp;%20Sams)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
                </div>
            </div>
         </div>
</Section>

    <!-- contacts -->

    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-6 m-auto">
                
                        <form id="quickForm" novalidate="novalidate" action="" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                        <h3 class="title-big">Send us a Message</h3>
                        <br>

                                 <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-md-4">
                                            <label for="starting_bid_price">Name</label>
                                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" aria-describedby="starting_bid_price-error" aria-invalid="true" min="1000">
                                        </div>

                                        <div class="col-md-4">
                                            <label for="starting_bid_price">Email</label>
                                            <input type="text" name="email" class="form-control" id="email" placeholder="Enter email" aria-describedby="starting_bid_price-error" aria-invalid="true" min="1000">
                                        </div>

                                        <div class="col-md-4">
                                            <label for="starting_bid_price">Phone Number</label>
                                            <input type="text" name="phone_no" class="form-control" id="phone_no" placeholder="Enter phone number" aria-describedby="starting_bid_price-error" aria-invalid="true" min="1000">
                                        </div>
                                       
                                    </div>
                                </div>

                                <div class="form-group">
                                     <label for="starting_bid_price">Subject</label>
                                     <input type="text" name="subject" class="form-control" id="subject" placeholder="Enter subject" aria-describedby="starting_bid_price-error" aria-invalid="true" min="1000">
                                </div>
                        

                                <div class="form-group">
                                    <label for="product_description">message</label>
                                    <textarea name="message" class="form-control" id="message" placeholder="Enter MEssage" aria-describedby="product_description-error" spellcheck="true" cols="20" rows="3"></textarea>
                                </div>

                                <div class="form-group">
                                     <button type="submit" class="btn btn-primary float-right">Send Message</button>
                                </div>

                            </div>
                        </form>
                </div>

                <div class="col-md-3 m-auto">
                
                        <div class="card-body"> 

                        <br>
                        <address>
                            <h5 class="Display-4"><span class="fa fa-map-marker"></span>        Contact Address</h5>
                            <p><span class="fa fa-"></span>No 001 </p>
                            <p><span class="fa fa-"></span>Luis Place, Colombo, </p>
                            <p><span class="fa fa-"></span>Sri Lanka - Postcodes: 00500 </p>

                            <h5 class="Display-4"><span class="fa fa-envelope"></span>        Email</h5>
                            <p>samsandsams@gmail.com</p>

                            <h5 class="Display-4"><span class="fa fa-phone"></span>        Contact Number</h5>
                            <p>+94 777 123 1231</p>

                            <a href="{{route('landing.shop')}}" class="btn btn-style btn-outline-primary mt-4"><span class="fa fa-shopping-cart mr-1"></span> Shop Now</a>
                        </address>
                        </div>  
                    
                </div>


            </div>
        </div>
    </section>

    

@endsection
