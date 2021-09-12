<!-- Mobile Overlayer Navigation -->
<section class="mobile-overlayer-navigation d-flex align-items-center justify-content-center" id="mobile-ovelayer-navigation">
    <!-- Mobile Close Nav Button -->
    <a href="" class="mobile-closenav-button" id="mobile-closenav-button"><i class="fas fa-times"></i></a>

    <!-- Overlayer Navlink Content -->
    <ul class="overlayer-navcontent">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Shop</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Browse Items</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
        </li>

        <!-- Cart Icons -->
        <li class="navbar-icon-group d-flex">
            <a href="" class="icon-wishlist icon-item">
                <span class="icon"><i class="fas fa-heart"></i></span>
                <span class="badge badge-pill">0</span>
            </a>

            <a href="" class="icon-cart icon-item">
                <span class="icon"><i class="fas fa-shopping-cart"></i></span>
                <span class="badge badge-pill">10</span>
            </a>

            <div class="cart-amount d-flex">
                <span class="cart-text">Your cart</span>
                <span class="cart-price">$0.00</span>
            </div>
        </li>
    </ul>
</section>

<!-- Header Navigation -->
<header id="page-header-navcontainer">
    <div class="header-navigation navbar navbar-expand-lg" id="page-header-navigation">
        <!-- Top Header -->
        <nav class="top-header-nav d-flex align-items-center">
            <!-- Navbar Branding -->
            <a href="/" class="navbar-brand">
                <img width="175" height="50" src="{{asset('img/Logo.png')}}" alt="Sams & Sams Logo">
            </a>

            <!-- Navbar Links -->
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 desktop-only">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('landing.home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('landing.about')}}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('landing.shop')}}">Shop</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Browse Items</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="{{route('landing.contact')}}">Contact</a>
                </li>
            </ul>

            <!-- Navbar Buttons -->
            @if(Auth::check())
                <div class="dropdown logedin-dropdown">
                    <a class="btn logedin-btn dropdown-toggle d-flex align-items-center justify-content-between"  role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img width="32" height="32" src="https://adminlte.io/themes/v3/dist/img/user2-160x160.jpg" alt="{{Auth::user()->name}} profile image" class="logedin-img">
                        <div class="logedin-text">{{Auth::user()->name}}</div>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="#">Account Settings</a>
                        <div class="dropdown-divider"></div>
                        @hasanyrole('super_admin')
                            <a class="dropdown-item" href="{{route('admin.dashboard')}}">Admin Dashboard</a>
                            <div class="dropdown-divider"></div>
                        @endhasanyrole
                        <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            @else
                <a href="{{ route('login') }}" class="btn btn-theme-secondary desktop-only">Login</a>
            @endif

            <!-- Mobile Open Nav Button -->
            <a href="#" class="mobile-opennav-button mobile-only" id="mobile-opennav-button"><i class="fas fa-bars"></i></a>
        </nav>

        <!-- Bottom Header -->
        <div class="bottom-header-nav d-flex align-items-center justify-content-between">
            <!-- Navbar Category Button -->
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

            <!-- Search Bar -->
            <div class="input-group search-bar">
                <input type="text" class="form-control" placeholder="Search Products" aria-label="Search Products" aria-describedby="search-icon">
                <div class="input-group-append">
                    <span class="input-group-text" id="search-icon"><i class="fas fa-search"></i></span>
                </div>
            </div>

            <!-- Cart Icons -->
            <div class="navbar-icon-group d-flex">
                <a href="" class="icon-wishlist icon-item">
                    <span class="icon"><i class="fas fa-heart"></i></span>
                    <span class="badge badge-pill">0</span>
                </a>

                <a href="" class="icon-cart icon-item">
                    <span class="icon"><i class="fas fa-shopping-cart"></i></span>
                    <span class="badge badge-pill">10</span>
                </a>

                <div class="cart-amount d-flex">
                    <span class="cart-text">Your cart</span>
                    <span class="cart-price">$0.00</span>
                </div>
            </div>
        </div>
    </div>
</header>
