<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Amping - HTML 5 Template Preview</title>

<!-- Fav Icon -->
<link rel="icon" href="{{ asset('/assets/images/favicon.ico')}}" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="{{ asset('/assets/css/font-awesome-all.css')}}" rel="stylesheet">
<link href="{{ asset('/assets/css/flaticon.css') }}" rel="stylesheet">
<link href="{{ asset('/assets/css/owl.css') }}" rel="stylesheet">
<link href="{{ asset('/assets/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('/assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
<link href="{{ asset('/assets/css/animate.css' )}}" rel="stylesheet">
<link href="{{ asset('/assets/css/color.css') }}" rel="stylesheet">
<link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('/assets/css/responsive.css') }}" rel="stylesheet">

</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">


        <!-- preloader -->
        <div class="preloader">
            <div class="boxes">
                <div class="box">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="box">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="box">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="box">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
        <!-- preloader end -->


        <!-- main header -->
        <header class="main-header header-style-one">
            <div class="header-lower">
                <div class="logo-box">
                    <figure class="logo"><a href="index.html"><img src="{{ asset('assets/images/logo.png') }}" alt=""></a></figure>
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
                                    <li class="current dropdown"><a href="index.html">Home</a>
                                        <ul>
                                            <li><a href="index.html">Home Page One</a></li>
                                            <li><a href="index-2.html">Home Page Two</a></li>
                                            <li><a href="index-onepage.html">Home OnePage</a></li>
                                            <li><a href="index-rtl.html">Home RTL</a></li>
                                            <li class="dropdown"><a href="index.html">Header Style</a>
                                                <ul>
                                                    <li><a href="index.html">Header Style One</a></li>
                                                    <li><a href="index-2.html">Header Style Two</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li> 
                                    <li class="dropdown"><a href="index.html">Activities</a>
                                        <ul>
                                            <li><a href="activities.html">Activities</a></li>
                                            <li><a href="climbing.html">Climbing</a></li>
                                            <li><a href="adventure.html">Adventure</a></li>
                                            <li><a href="camping.html">Camping</a></li>
                                            <li><a href="diving.html">Diving</a></li>
                                            <li><a href="parachute.html">Parachute</a></li>
                                            <li><a href="throwing.html">Throwing</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">About us</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="menu-right-content">
                        <a href="about.html" class="theme-btn btn-one" style="padding: 10px 10px;" >Login / registration</a>
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
                    <div class="menu-right-content">
                        <a href="about.html" class="theme-btn btn-one" style="padding: 10px 10px;" >Login / registration</a>
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
                <div class="nav-logo"><a href="index.html"><img src="assets/images/logo-2.png" alt="" title=""></a></div>
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
                        <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->


        <div class="container">
            <div class="container py-4">
        
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-5 mb-5 mb-lg-0">
                        <h2 class="font-weight-bold text-5 mb-0">Login</h2>
                        <form method="POST" action="{{ url('/post_login') }}"  id="frmSignIn" class="needs-validation" novalidate="novalidate">
                            @csrf
                            <div class="row">
                                <div class="form-group col">
                                    <label class="form-label text-color-dark text-3">Email address <span class="text-color-danger">*</span></label>
                                    <input type="text" value="{{ old('email') }}" name="email" class="form-control form-control-lg text-4 @error('email') is-invalid @enderror" required="" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <label class="form-label text-color-dark text-3">Password <span class="text-color-danger">*</span></label>
                                    <input type="password" value="" class="form-control form-control-lg text-4  @error('password') is-invalid @enderror" name="password" required="" >
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="row">
                                <div class="form-group col">
                                    <button type="submit" class="btn btn-dark btn-modern w-100 text-uppercase rounded-0 font-weight-bold text-3 py-3" data-loading-text="Loading...">Login</button>
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                    
                </div>
        
            </div>
        
            
        </div>

        <!-- main-footer -->
        <footer class="main-footer">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-13.png);"></div>
            <div class="auto-container">
               
                <div class="widget-section">
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h4>Explore</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="index.html">Meet Our Team</a></li>
                                        <li><a href="index.html">What We Do</a></li>
                                        <li><a href="index.html">Latest News</a></li>
                                        <li><a href="index.html">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget ml-70">
                                <div class="widget-title">
                                    <h4>Activities</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="index.html">Tree Climbing</a></li>
                                        <li><a href="index.html">Cross the River</a></li>
                                        <li><a href="index.html">Mountain Boarding</a></li>
                                        <li><a href="index.html">Parachute</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget contact-widget">
                                <div class="widget-title">
                                    <h4>Contact</h4>
                                </div>
                                <div class="widget-content">
                                    <p>60 road, broklyn golden street new york. USA</p>
                                    <ul class="social-links clearfix">
                                        <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget newsletter-widget">
                                <div class="widget-title">
                                    <h4>Newsletter</h4>
                                </div>
                                <div class="widget-content">
                                    <p>Subsrcibe for our upcoming latest articles and news resources</p>
                                    <form action="contact.html" method="post" class="newsletter-form">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email address" required>
                                            <button type="submit"><i class="fas fa-paper-plane"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </footer>
        <!-- main-footer end -->


        <!-- scroll to top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fal fa-long-arrow-up"></i>
        </button>
    </div>


    <!-- jequery plugins -->
    <script src="{{ asset('/assets/js/jquery.js') }}"></script>
    <script src="{{ asset('/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/assets/js/owl.js') }}"></script>
    <script src="{{ asset('/assets/js/wow.js') }}"></script>
    <script src="{{ asset('/assets/js/validation.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('/assets/js/appear.js') }}"></script>
    <script src="{{ asset('/assets/js/scrollbar.js') }}"></script>
    <script src="{{ asset('/assets/js/parallax-scroll.js') }}"></script>
    <script src="{{ asset('/assets/js/isotope.js') }}"></script>

    <!-- main-js -->
    <script src="{{ asset('/assets/js/script.js') }}"></script>

</body><!-- End of .page_wrapper -->
</html>
