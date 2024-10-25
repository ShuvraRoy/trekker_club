<!-- main header -->
<header class="main-header header-style-one">
    <div class="header-lower">
        <div class="logo-box">
            <figure class="logo"><a class="logo-mobile" href="/"><img style="height:60px;" src="{{ asset('/assets/images/tr_logo.png') }}" alt=""></a></figure>
        </div>
        <div class="outer-box">
            <div class="menu-area">
                <!--Mobile Navigation Toggler-->
                <div class="mobile-nav-toggler">
                    <i class="icon-bar"></i>
                    <i class="icon-bar"></i>
                    <i class="icon-bar"></i>
                </div>
                <nav class="main-menu navbar-expand-md navbar-light">
                    <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                        <ul class="navigation clearfix">
                            <li class="current dropdown"><a href="{{ url('/') }}">Home</a>
                            </li> 
                            <li class="dropdown"><a href="#">Activities</a>
                                <ul>
                                    @if(isset($activities) && count($activities) > 0)
                                        @foreach($activities as $activity)
                                            <li><a href="{{ url('/activities/' . strtolower(str_replace(' ', '-', $activity->name))) }}">{{ $activity->name }}</a></li>
                                        @endforeach
                                    @else
                                        {{-- <li><a href="#">No Activities Available</a></li> --}}
                                    @endif
                                </ul>
                            </li>
                            <li><a href="{{ url('/about-us') }}">About us</a></li>
                            {{-- <li><a href="#">Contact</a></li> --}}
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="menu-right-content d-flex align-items-center justify-content-end">
                @if (Auth::check()) <!-- Check if the user is authenticated -->
                    <div class="user-info d-flex align-items-center">
                        <a href="{{ url('/profile') }}" style="text-decoration: none; color: inherit;">
                            <i style="font-size: 24px; color: #000; padding-right: 5px;" class="fas fa-user-circle user-icon"></i>
                            <span class="user-name">{{ Auth::user()->name }}</span>
                        </a>
                        <a href="{{ url('/logout') }}" class="btn btn-link logout-button" style="padding: 10px;">Logout</a>
                    </div>
                @else
                    <a href="/login" class="theme-btn btn-one" style="padding: 10px;">Login / Registration</a>
                @endif
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="outer-box">
            <div class="menu-area">
                <nav class="main-menu clearfix">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav>
            </div>
            <div class="menu-right-content d-flex align-items-center justify-content-end">
                @if (Auth::check()) <!-- Check if the user is authenticated -->
                    <div class="user-info d-flex align-items-center">
                        <a href="{{ url('/profile') }}" style="text-decoration: none; color: inherit;">
                            <i style="font-size: 24px; color: #000; padding-right: 5px;" class="fas fa-user-circle user-icon"></i>
                            <span class="user-name">{{ Auth::user()->name }}</span>
                        </a>
                        <a href="{{ url('/logout') }}" class="btn btn-link logout-button" style="padding: 10px;">Logout</a>

                    </div>
                @else
                    <a href="/login" class="theme-btn btn-one" style="padding: 10px;">Login / Registration</a>
                @endif
            </div>
        </div>
    </div>
</header>
<!-- main-header end -->

<!-- Mobile Menu  -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>
    
    <nav class="menu-box">
        <div class="nav-logo"><a href="#"><img src="/assets/images/tr_logo.png" alt="" title=""></a></div>
        <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>
                <li>Chicago 12, Melborne City, USA</li>
                <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                <li><a href="mailto:info@example.com">info@example.com</a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">
                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                <li><a href="#"><span class="fab fa-youtube"></span></a></li>
            </ul>
        </div>
    </nav>
</div><!-- End Mobile Menu -->