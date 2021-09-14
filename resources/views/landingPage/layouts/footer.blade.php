<footer class="page-footer" id="page-footer">
    <!-- Footer Section Top -->
    <section class="footer-top-section">
        <!-- Footer Top Section Colums -->
        <div class="footer-column">
            <div class="footer-about">
                <a href="#" class="footer-about-branding">
                    <img width="175" height="50" src="{{asset('img/Logo.png')}}" alt="">
                </a>

                <div class="foooter-about-text">
                    <P>Street addresses: No 001</P> 
                    <P>Luis Place, Colombo,</P> 
                    <P>Sri Lanka - Postcodes: 00500</P> 
                </div>
            </div>

            <div class="footer-social">
                <div class="footer-social-header">
                    FOLLOW US
                </div>

                <div class="footer-social-links">
                    <a href="https://www.facebook.com/" class="footer-social-link">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="https://www.instagram.com/" class="footer-social-link">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.twitter.com/" class="footer-social-link">
                        <i class="fab fa-twitter"></i>
                    </a>
                    
                </div>
            </div>
        </div>

        <!-- Footer Top Section Colums -->
        <div class="footer-column">
            <div class="footer-column-header">Sams & Sams</div>

            <div class="footer-column-links d-flex flex-column">
                <a href="{{route('landing.home')}}" class="footer-link-item">Home</a>
                <a href="{{route('landing.shop')}}" class="footer-link-item">Shop</a>
                <a href="{{route('landing.about')}}" class="footer-link-item">About Us</a>
                <a href="{{route('landing.contact')}}" class="footer-link-item">Contact</a>
            </div>
        </div>

        <!-- Footer Top Section Colums -->
        <div class="footer-column">
            <div class="footer-column-header">Browse Retails</div>

            <div class="footer-column-links d-flex flex-column">
            @php
                $categories = App\ProductCategory::all()->sortByDesc('created_at')->take(5);
            @endphp
            @foreach($categories as $category)
            <a href="" class="footer-link-item">{{$category->category_name}}</a>
            @endforeach
                
            </div>
        </div>

        <!-- Footer Top Section Colums -->
        <div class="footer-column">
            <div class="footer-column-header">Locations</div>

            <div class="footer-column-links d-flex flex-column">
                <a href="" class="footer-link-item">Colombo</a>
                <a href="" class="footer-link-item">Kandy</a>
                <a href="" class="footer-link-item">Badulla</a>
                <a href="" class="footer-link-item">Gampaha</a>
            </div>
        </div>
    </section>

    <!-- Footer Section Bottom -->
    <section class="footer-bottom-section text-center">
        <p>Copyright © 2021 | Sams & Sams</p>
    </section>
</footer>

@yield('additional-scripts')