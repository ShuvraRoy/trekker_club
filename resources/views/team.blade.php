@extends('layouts.master')
@section('page_links')
<title>Thrill Trekkers Club</title>
<style>
    .team-card {
        height: 527px; /* Set the fixed height for the card */
        overflow: hidden; /* Prevent overflow of content */
    }
    .card-img-top {
        height: 150px; /* Set a fixed height for the image */
        object-fit: cover; /* Ensure the image covers the area without distortion */
    }
</style>
@endsection 
@section('content')


<!-- Page Title -->
<section class="page-title centred">
    <div class="bg-layer" style="background-image: url(/assets/images/banner/home.jpg);"></div>
    <div class="pattern-layer" style="background-image: url(/assets/images/shape/shape-12.png);"></div>
    <div class="auto-container">
        <div class="content-box">
            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Team</li>
                {{-- <li>{{ $user->name}}</li> --}}
            </ul>
            <div class="title">
                <h1>Meet Our Team</h1>
            </div>
        </div>
    </div>

</section>
<!-- End Page Title -->

<div class="container my-5">
    <h2 class="text-center mb-4">Meet Our Team</h2>
    <div class="row">
        <!-- Team Member Card 1 -->
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card team-card">
                <img src="{{ asset('assets/images/team/james.jpeg') }}" class="card-img-top" alt="Team Member 1">
                <div class="card-body text-center">
                    <h5 class="card-title">James Edward</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Founder & Chairman</h6>
                    <p class="card-text">James is passionate about outdoor adventures and has been a driving force behind the club since its inception in 2010. He’s an International Mountain Leader with extensive experience in hiking, snowshoeing, and cycling.</p>
                </div>
            </div>
        </div>

        <!-- Team Member Card 2 -->
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card team-card">
                <img src="{{ asset('assets/images/team/alif.jpeg') }}" class="card-img-top" alt="Team Member 2">
                <div class="card-body text-center">
                    <h5 class="card-title">Junayed Alif</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Logistics & Coordination</h6>
                    <p class="card-text">Junayed, a geologist by training, is known for his exceptional organizational skills. He ensures smooth trip operations and has a deep passion for nature, mountains, and rocks.</p>
                </div>
            </div>
        </div>

        <!-- Team Member Card 3 -->
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card team-card">
                <img src="{{ asset('assets/images/team/sayeed.jpeg') }}" class="card-img-top" alt="Team Member 3">
                <div class="card-body text-center">
                    <h5 class="card-title">Syeed Mahadee</h5>
                    <h6 class="card-subtitle mb-2 text-muted">IT & Cycling Specialist</h6>
                    <p class="card-text">Syeed joined the team in 2014 and plays a vital role in organizing cycling trips and handling IT needs. He is also a talented musician and an experienced endurance athlete.</p>
                </div>
            </div>
        </div>

        <!-- Team Member Card 4 -->
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card team-card">
                <img src="{{ asset('assets/images/team/mufar.jpeg') }}" class="card-img-top" alt="Team Member 4">
                <div class="card-body text-center">
                    <h5 class="card-title">Mufarreh Deen</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Guide & Outdoor Expert</h6>
                    <p class="card-text">Mufar specializes in guiding trips through the French Alps and beyond. He loves leading challenging routes and shares his passion for the mountains with our adventurers.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- activities-details end -->



@endsection

@section('page_script')

<script>
    
</script>
@endsection