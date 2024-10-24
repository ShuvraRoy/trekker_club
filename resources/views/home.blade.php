@extends('layouts.master')
@section('page_links')
<title>Thrill Trekkers Club</title>
@endsection 
@section('content')
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
                    {{-- <h2>Camping With <br />Friends Gives Joy</h2> --}}
                    <div class="btn-box">
                        {{-- <a href="index.html" class="theme-btn btn-one">Discover More</a> --}}
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
                    {{-- <h2>Camping With <br />Friends Gives Joy</h2> --}}
                    <div class="btn-box">
                        {{-- <a href="index.html" class="theme-btn btn-one">Discover More</a> --}}
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
            @foreach($activities as $activity)
                <div class="activities-block-one">
                    <div class="inner-box">
                        <div class="lower-content">
                            <h3><a href="{{ url('/activities/' . strtolower(str_replace(' ', '-', $activity->name))) }}">{{ $activity->name }}</a></h3>
                            <p>{{ $activity->description }}</p> <!-- Assuming you have a description field -->
                            <div class="link"><a href="{{ url('/activities/' . strtolower(str_replace(' ', '-', $activity->name))) }}">Read More</a></div>
                        </div>
                    </div>
                </div>
            @endforeach
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
                            <figure class="image-box"><a href="{{ asset('assets/images/gallery/hiking.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img style="height: 230px;" src="{{ asset('assets/images/gallery/hiking.jpg') }}" alt=""></a></figure>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 masonry-item small-column">
                    <div class="gallery-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><a href="{{ asset('assets/images/gallery/kayaking.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img style="height: 490px;" src="{{ asset('assets/images/gallery/kayaking.jpg') }}" alt=""></a></figure>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 masonry-item small-column">
                    <div class="gallery-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><a href="{{ asset('assets/images/gallery/rock_climbing.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img style="height: 490px;" src="{{ asset('assets/images/gallery/rock_climbing.jpg') }}" alt=""></a></figure>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 masonry-item small-column">
                    <div class="gallery-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><a href="{{ asset('assets/images/gallery/camping.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img style="height: 230px;" src="{{ asset('assets/images/gallery/camping.jpg') }}" alt=""></a></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- gallery-section end -->

@endsection

@section('page_script')

@endsection