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
                <li>Profile</li>
                <li>{{ $user->name}}</li>
            </ul>
            <div class="title">
                <h1>{{ $user->name}}</h1>
            </div>
        </div>
    </div>

</section>
<!-- End Page Title -->

<div class="container">
    <!-- User Information Section -->
    <div class="row mb-5">
        <div class="col-12">
            <h2 style="margin-top: 15px;">User Information</h2>
            <form id="updateUserForm" action="{{ url('/profile/update')}}" method="POST">
                <div id="responseMessage" class="alert d-none"></div>
                @csrf
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="age">Age:</label>
                        <input type="number" class="form-control" id="age" name="age" value="{{ Auth::user()->age }}" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="phone">Phone:</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{ Auth::user()->phone }}" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="emergency_contact">Emergency Contact:</label>
                        <input type="text" class="form-control" id="emergency_contact" name="emergency_contact" value="{{ Auth::user()->emergency_contact }}" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="medical_condition">Medical Condition:</label>
                        <textarea name="medical_condition" 
                        class="form-control form-control-lg text-4 @error('medical_condition') is-invalid @enderror" 
                        rows="1" 
                        style="resize: none; overflow: hidden;" 
                        oninput="this.style.height = ''; this.style.height = this.scrollHeight + 'px';">{{ Auth::user()->medical_condition }}</textarea>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="dietary_preference">Dietary Preference:</label>
                        <textarea name="dietary_preference" 
                        class="form-control form-control-lg text-4 @error('dietary_preference') is-invalid @enderror" 
                        rows="1" 
                        style="resize: none; overflow: hidden;" 
                        oninput="this.style.height = ''; this.style.height = this.scrollHeight + 'px';">{{ Auth::user()->dietary_preference }}</textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-success" >Update Information</button>
            </form>
        </div>
    </div>

    <!-- Booked Sessions Section -->
    <h2 style="margin-bottom: 15px;">Booked Sessions</h2>

    <div class="row clearfix">
        @if($bookedSessions->isEmpty())
            <div class="col-12 text-center">
                <p>No booked sessions available at the moment. Please check back later.</p>
            </div>
        @else
            @foreach($bookedSessions as $bookedSession)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="session-item card p-3">
                        <h4 style="font-weight:bold; margin-bottom:10px;">{{ $bookedSession->session->activity->name }} Session</h4>
                        <ul class="list-style-one clearfix">
                            <li><strong>Booking Date & Time:</strong> {{ date("d M, Y h:i A", strtotime($bookedSession->created_at)) }}</li>
                            <li><strong>Session Date & Time:</strong> {{ date("d M, Y h:i A", strtotime($bookedSession->session->date_time)) }}</li>
                            <li><strong>Duration:</strong> {{ floor($bookedSession->session->duration / 60) }} hour(s) {{ $bookedSession->session->duration % 60 }} minute(s)</li>
                            <li><strong>Location:</strong> {{ $bookedSession->session->location }}</li>
                            <li><strong>Fees:</strong> ${{ number_format($bookedSession->session->fees, 2) }}</li>
                            {{-- <li id="slots-available-{{ $bookedSession->session->id }}">
                                <strong>Slots Available:</strong> {{ $bookedSession->session->slots_available }} out of {{ $bookedSession->session->total_slots }}
                            </li> --}}
                        </ul>
                    </div>
                </div>
                @if ($loop->iteration % 4 == 0 && !$loop->last)
                    </div><div class="row mb-4">
                @endif
            @endforeach
    
            <!-- Close the last row if there's an odd number of sessions -->
            @if ($bookedSessions->count() % 4 != 0)
                <div class="col-lg-3 col-md-4 col-sm-6"></div> <!-- Empty column to maintain grid -->
            @endif
        @endif
    </div>
</div>
<!-- activities-details end -->



@endsection

@section('page_script')

{{-- <script>
    $('#add_session_form').on('submit', function(e) {
            e.preventDefault(); // Prevent the default form submission
            $.ajax({
                url: $(this).attr('action'),
                method: $(this).attr('method'),
                data: $(this).serialize(),
                success: function(response) {
                    toastr.success(response.success || 'Profile updated successfully.');
                },
                error: function(xhr) {
                    if (xhr.responseJSON && xhr.responseJSON.errors) {
                        $.each(xhr.responseJSON.errors, function(key, error) {
                            toastr.error(error[0]);
                        });
                    } else {
                        toastr.error('An error occurred. Please try again.');
                    }
                }
            });
        });
</script> --}}
@endsection