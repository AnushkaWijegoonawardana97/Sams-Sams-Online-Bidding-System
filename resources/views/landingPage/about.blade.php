@extends('landingPage.layouts.master')

@section('content')

    

	<section id="what-we-do">
		<div class="container-fluid">
            <center><div class="section-header">
                <h2>About Us</h2>
                <div class="header-sperator"><i class="fas fa-info"></i></div>
            </div></center>

            <div class="row mt-5">
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-6">
                    <p class="text-center text-muted h5">
                    What was the last time you had an exciting and rewarding online shopping experience? Can’t remember!
                    How about we make it even more convenient, fast and affordable to fulfill all your buying needs? With Sri Lanka's 
                    biggest online shopping store, you can choose from hundreds and thousands <br> of endless and ageless collections of chicest and 
                    stylish products.  <br><br>
                    
                    The Sams & Sams (Pvt) Ltd is an online software platform for buying and selling various products. 
                    The product main categories range from Electrics, books, furniture, fashion products, Jewelry etc. 
                    And the products are to be sold in a mode of online auction. With the help of our website, 
                    it is necessary to give easy service to the customers who are far from reach.<br><br>

                    Experience online shopping in Sri Lanka with Sams&Sams by purchasing genuine quality products showcased
                    by verified sellers across the country <br> that will ensure safe and swift deliveries of your orders.</p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-6">
                <img class="d-block w-100" src="{{asset('img/Logo.png')}}" alt="Image">
                </div>
            </div>


            <section class="product-list-container text-center primary-ccontainer primary-section-padding" id="product-list-container">
			<div class="row mt-5">
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<div class="card">
						<div class="card-block block-1">
							<h3 class="card-title">Wide Product Range</h3>
							<p class="card-text">Sams & Sams is overloaded With a Wide range of products and hundreds of product categories </p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<div class="card">
						<div class="card-block block-2">
							<h3 class="card-title">Home Delivery</h3>
							<p class="card-text">Our delivery team will deliver your fevorite items to your door step with in 24 Hours of purchase. </p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<div class="card">
						<div class="card-block block-3">
							<h3 class="card-title">Customer Care</h3>
							<p class="card-text">Sams & sams team will always stay just one phone call away to assist you in anytime.<br> We mean it :) anytime 24/7</p>
						</div>
					</div>
				</div>
			</div>
            </section>
			
		</div>	
	</section>


<style>
    /**********************
/***** Services *******
/*********************/
@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
section{
	padding: 60px 0;
}
section .section-title{
	text-align:center;
	color:#0654ae;
	margin-bottom:50px;
	text-transform:uppercase;
}

#what-we-do .card{
	padding: 1rem!important;
	border: none;
	margin-bottom:1rem;
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
	transition: .5s all ease;
}
#what-we-do .card:hover{
	-webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
	-moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
	box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
}
#what-we-do .card .card-block{
	padding-left: 50px;
    position: relative;
}
#what-we-do .card .card-block a{
	color: #0654ae !important;
	font-weight:700;
	text-decoration:none;
}
#what-we-do .card .card-block a i{
	display:none;
	
}
#what-we-do .card:hover .card-block a i{
	display:inline-block;
	font-weight:700;
	
}
#what-we-do .card .card-block:before{
	font-family: FontAwesome;
    position: absolute;
    font-size: 39px;
    color: #0654ae;
    left: 0;
	-webkit-transition: -webkit-transform .2s ease-in-out;
    transition:transform .2s ease-in-out;
}
#what-we-do .card .block-1:before{
    content: "\f290";
}
#what-we-do .card .block-2:before{
    content: "\f0d1";
}
#what-we-do .card .block-3:before{
    content: "\f004";
}

#what-we-do .card:hover .card-block:before{
	-webkit-transform: rotate(360deg);
	transform: rotate(360deg);	
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
	transition: .5s all ease;
}
</style>

@endsection
