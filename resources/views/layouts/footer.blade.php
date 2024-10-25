<!-- main-footer -->
<footer class="main-footer">
    <div class="pattern-layer" style="background-image: url(/assets/images/shape/shape-13.png);"></div>
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
                                <li><a href="{{ url('/team') }}">Meet Our Team</a></li>
                                <li><a href="{{ url('/about-us') }}">About Us</a></li>
                                {{-- <li><a href="{{ url('/contact-us') }}">Contact</a></li> --}}
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
                                @if(!empty($activities) && $activities->count())
                                    @foreach($activities as $activity)
                                        <li><a href="{{ url('/activities/' . strtolower(str_replace(' ', '-', $activity->name))) }}">{{ $activity->name }}</a></li>
                                    @endforeach
                                @else
                                    {{-- <li>No activities available</li> --}}
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 footer-column" style="margin-left: 70px;">
                    <div class="footer-widget contact-widget">
                        <div class="widget-title">
                            <h4>Contact</h4>
                        </div>
                        <div class="widget-content">
                            <p>Australia</p>
                            <ul class="social-links clearfix">
                                <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</footer>
<!-- main-footer end -->