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
                    <figure class="logo"><a class="logo-mobile" href="index.html"><img style="height:60px;" src="{{ asset('assets/images/tr_logo.png') }}" alt=""></a></figure>
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
                        <a href="/login" class="theme-btn btn-one" style="padding: 10px 10px;" >Login / registration</a>
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
                <div class="nav-logo"><a href="index.html"><img src="assets/images/tr_logo.png" alt="" title=""></a></div>
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


        <!-- banner-section -->
        <section class="banner-section centred">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-1.png);"></div>
            <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url(assets/images/banner/home.jpg)"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <div class="shape" style="background-image: url(assets/images/shape/shape-2.png);"></div>
                            <span>Join the Summer Adventure</span>
                            <h2>Camping With <br />Friends Gives Joy</h2>
                            <div class="btn-box">
                                <a href="index.html" class="theme-btn btn-one">Discover More</a>
                            </div>
                        </div>  
                    </div>
                </div>
                <div class="slide-item style-two">
                    <div class="image-layer" style="background-image:url(assets/images/banner/camping.jpg)"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <div class="shape" style="background-image: url(assets/images/shape/shape-2.png);"></div>
                            <span>Join the Summer Adventure</span>
                            <h2>Camping With <br />Friends Gives Joy</h2>
                            <div class="btn-box">
                                <a href="index.html" class="theme-btn btn-one">Discover More</a>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            
        </section>
        <!-- banner-section end -->


        <!-- about-section -->
        <section class="about-section bg-color-1">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-4.png);"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_one">
                            <div class="image-box">
                                <div class="text">Trekkers Club</div>
                                <div class="shape" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                <figure class="image"><img style="height:600px;" src="assets/images/resource/hiking_about.jpg" alt=""></figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_one">
                            <div class="content-box">
                                <div class="sec-title">
                                    <span class="sub-title">Our Introductions</span>
                                    <h2>Welcome to Thrill Trekkers Club</h2>
                                </div>
                                <div class="text">
                                    <div class="icon-box"><i class="flaticon-camping"></i></div>
                                    <p>Your Ultimate Destination for Unforgettable and Tailored Adventure Experiences.</p>
                                </div>
                                <ul class="list-style-one clearfix">
                                    <li>Customized itineraries for all levels, from beginners to seasoned explorers.</li>
                                    <li>Full-service planning, safety briefings, gear rental, and expert guides.</li>
                                    <li>Prioritizing secure, eco-friendly, and personalized adventure experiences.</li>
                                </ul>
                                <div class="btn-box">
                                    <a href="about.html" class="theme-btn btn-one">Discover More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end -->


        <!-- activities-section -->
        <section class="activities-section sec-pad centred">
            <div class="auto-container">
                <div class="sec-title">
                    <span class="sub-title">What We’re Offering</span>
                    <h2>Our Activities</h2>
                </div>
                <div class="three-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                    <div class="activities-block-one">
                        <div class="inner-box">
                            <div class="image-box"><a href="climbing.html"><img src="assets/images/resource/activities-1.jpg" alt=""></a></div>
                            <div class="lower-content">
                                <div class="icon-box">
                                    <div class="shape" style="background-image: url(assets/images/shape/shape-5.png);"></div>
                                    <div class="overlay-shape" style="background-image: url(assets/images/shape/shape-6.png);"></div>
                                    <i class="flaticon-climbing"></i>
                                </div>
                                <h3><a href="climbing.html">Climbing</a></h3>
                                <p>There are not many of passages of lorem ipsum available alteration in osten some form.</p>
                                <div class="link"><a href="climbing.html">Read More</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="activities-block-one">
                        <div class="inner-box">
                            <div class="image-box"><a href="adventure.html"><img src="assets/images/resource/activities-2.jpg" alt=""></a></div>
                            <div class="lower-content">
                                <div class="icon-box">
                                    <div class="shape" style="background-image: url(assets/images/shape/shape-5.png);"></div>
                                    <div class="overlay-shape" style="background-image: url(assets/images/shape/shape-6.png);"></div>
                                    <i class="flaticon-adventurer"></i>
                                </div>
                                <h3><a href="adventure.html">Adventure</a></h3>
                                <p>There are not many of passages of lorem ipsum available alteration in osten some form.</p>
                                <div class="link"><a href="adventure.html">Read More</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="activities-block-one">
                        <div class="inner-box">
                            <div class="image-box"><a href="camping.html"><img src="assets/images/resource/activities-3.jpg" alt=""></a></div>
                            <div class="lower-content">
                                <div class="icon-box">
                                    <div class="shape" style="background-image: url(assets/images/shape/shape-5.png);"></div>
                                    <div class="overlay-shape" style="background-image: url(assets/images/shape/shape-6.png);"></div>
                                    <i class="flaticon-tent"></i>
                                </div>
                                <h3><a href="camping.html">Camping</a></h3>
                                <p>There are not many of passages of lorem ipsum available alteration in osten some form.</p>
                                <div class="link"><a href="camping.html">Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lower-box">
                    <div class="sec-title light">
                        <span class="sub-title">Get Ready For The</span>
                        <h3>Summer of a Lifetime</h3>
                    </div>
                    <div class="text">
                        <p>There are not many of lorem ipsum <br />available alteration.</p>
                    </div>
                    <div class="support-box">
                        <p>Call Anytime</p>
                        <h3><a href="tel:+6143404334">+ 61 434 043 34 </a></h3>
                    </div>
                </div>
            </div>
        </section>
        <!-- activities-section end -->


        <!-- video-section -->
        <section class="video-section">
            <div class="bg-layer parallax-bg" data-parallax='{"y": 100}' style="background-image: url(assets/images/background/camping.jpg);"></div>
            <div class="auto-container">
                <div class="inner-box">
                    <div class="sec-title light">
                        <span class="sub-title">Cmapning That’s Right For You</span>
                        <h2>Get Now Memorable Wonderful Outdoor Experiences</h2>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- video-section end -->

        <!-- gallery-section -->
        <section class="gallery-section centred">
            <div class="auto-container">
                <div class="sec-title">
                    <span class="sub-title">Our Photoshots</span>
                    <h2>Our Gallery</h2>
                </div>
                <div class="sortable-masonry">
                    <div class="items-container row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 masonry-item small-column">
                            <div class="gallery-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><a href="assets/images/gallery/gallery-1.jpg" class="lightbox-image" data-fancybox="gallery"><img src="assets/images/gallery/gallery-1.jpg" alt=""></a></figure>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 masonry-item small-column">
                            <div class="gallery-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><a href="assets/images/gallery/gallery-2.jpg" class="lightbox-image" data-fancybox="gallery"><img src="assets/images/gallery/gallery-2.jpg" alt=""></a></figure>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 masonry-item small-column">
                            <div class="gallery-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><a href="assets/images/gallery/gallery-3.jpg" class="lightbox-image" data-fancybox="gallery"><img src="assets/images/gallery/gallery-3.jpg" alt=""></a></figure>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 masonry-item small-column">
                            <div class="gallery-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><a href="assets/images/gallery/gallery-4.jpg" class="lightbox-image" data-fancybox="gallery"><img src="assets/images/gallery/gallery-4.jpg" alt=""></a></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- gallery-section end -->

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
