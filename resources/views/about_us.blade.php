@extends('layouts.master')
@section('page_links')
<title>Thrill Trekkers Club</title>
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
                <li>About Us</li>
                {{-- <li>{{ $user->name}}</li> --}}
            </ul>
            <div class="title">
                <h1>About Us</h1>
            </div>
        </div>
    </div>

</section>
<!-- End Page Title -->

<div style="max-width: 800px; margin: 0 auto; text-align: center; padding: 20px;">
    <h1 style="font-size: 36px; margin-bottom: 20px;">About Us</h1>
    <p style="font-size: 20px; line-height: 1.6; margin-bottom: 20px;">
        <strong style="font-size: 24px;">More Than 14 Years of Experience!</strong><br>
        At Thrill Trekkers, we specialize in curating unforgettable adventure experiences tailored to your sense of exploration and thrill. Our team of expert guides and planners is dedicated to crafting customized itineraries that cater to every level of adventurer, from first-time thrill-seekers to seasoned explorers.
    </p>
    <p style="font-size: 20px; line-height: 1.6; margin-bottom: 20px;">
        Whether you're looking to conquer rugged mountain trails, navigate challenging rapids, or immerse yourself in breathtaking landscapes, we provide comprehensive management of all your adventure activities. Our services include detailed planning, safety briefings, top-quality gear rental, and experienced guides to ensure a seamless and exhilarating experience.
    </p>
    <p style="font-size: 20px; line-height: 1.6; margin-bottom: 20px;">
        With Thrill Trekkers, you can focus on the excitement of the journey while we handle the logistics. Our commitment to safety, sustainability, and personal service means you’ll embark on your adventure with confidence and ease. Discover new horizons and create lasting memories with our expertly managed adventure activities.
    </p>
    <p style="font-size: 20px; line-height: 1.6;">
        Let us turn your adventurous dreams into reality!
    </p>
</div>

<!-- activities-details end -->



@endsection

@section('page_script')

<script>
    
</script>
@endsection