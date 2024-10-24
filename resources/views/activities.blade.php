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
                <li>Activities</li>
                <li>{{ $current_activity->name}}</li>
            </ul>
            <div class="title">
                <h1>{{ $current_activity->name}}</h1>
            </div>
        </div>
    </div>

</section>
<!-- End Page Title -->


<!-- activities-details -->
<section class="activities-details">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="activities-sidebar">
                    <div class="sidebar-widget category-widget">
                        <ul class="category-list clearfix">
                            @foreach($activities as $activity)
                            <li><a href="{{ url('/activities/' . strtolower(str_replace(' ', '-', $activity->name))) }}"
                                class="{{ (isset($activity) && $current_activity->name === $activity->name) ? 'current' : '' }}">
                                 {{ $activity->name }}
                             </a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="sidebar-widget support-widget">
                        <div class="inner-box centred" >
                            <div class="icon-box"><i class="flaticon-phone-call"></i></div>
                            <span>Contact with <br />us for any query </span>
                            <h3><a href="tel:+6143404334">+ 61 434 043 34</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="activities-details-content">
                    <div class="content-one centred">
                        <div class="lower-box">
                            <h2> {{ $current_activity->name }}</h2>
                            <div class="text">
                                <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ndustry standard dummy.</p>
                                <p>It has survived not only five centuries. Lorem Ipsum is simply dummy text of the new design printng and type setting Ipsum take a look at our round. When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
                            </div>
                        </div>
                    </div>
                    <div class="content-two">
                        <div class="row clearfix">
                            @if($sessions->isEmpty())
                                <div class="col-12 text-center">
                                    <p>No upcoming sessions available at the moment. Please check back later.</p>
                                </div>
                            @else
                                @foreach($sessions as $session)
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                                        <div class="session-item card p-3">
                                            <h2>Upcoming {{ $session->activity->name }} Session</h2>
                                            <ul class="list-style-one clearfix">
                                                <li><strong>Date & Time:</strong> {{ date("d M, Y h:i A", strtotime($session->date_time)) }}</li>
                                                <li><strong>Duration:</strong> {{ floor($session->duration / 60) }} hour(s) {{ $session->duration % 60 }} minute(s)</li>
                                                <li><strong>Location:</strong> {{ $session->location }}</li>
                                                <li><strong>Fees:</strong> ${{ number_format($session->fees, 2) }}</li>
                                                <li id="slots-available-{{ $session->id }}">
                                                    <strong>Slots Available:</strong> {{ $session->slots_available }} out of {{ $session->total_slots }}
                                                </li>
                                            </ul>
                                            @if($session->slots_available > 0)
                                                @if(Auth::check())
                                                    <div class="form-check" style="margin-top: 10px;">
                                                        <input style="margin-top: 10px;" type="checkbox" class="form-check-input" id="terms-checkbox-{{ $session->id }}" onchange="toggleBookButton({{ $session->id }})">
                                                        <label class="form-check-label" for="terms-checkbox-{{ $session->id }}">I agree to the terms and conditions.</label>
                                                    </div>
                                                    <a style="margin-top:15px;" id="book-button-{{ $session->id }}" href="javascript:void(0);" class="btn btn-primary book-session-btn disabled" data-session-id="{{ $session->id }}">Book Now</a>
                                                    @else
                                                    <button style="margin-top:15px;" class="btn btn-primary" onclick="alert('You need to sign in to book a session.')">Book Now</button>
                                                @endif      
                                            @else
                                                <button id="book-button-{{ $session->id }}" style="margin-top:15px;" class="btn btn-danger" disabled>No available slots</button>
                                            @endif                                              
                                        </div>
                                    </div>

                                    @if ($loop->iteration % 2 == 0)
                                        </div><div class="row mb-4">
                                    @endif
                                @endforeach

                                <!-- Close the last row if there's an odd number of sessions -->
                                @if ($sessions->count() % 2 != 0)
                                    <div class="col-lg-6 col-md-6 col-sm-12"></div> <!-- Empty column to maintain grid -->
                                @endif
                            @endif
                        </div>
                    </div>
                    <div class="content-three">
                        <ul class="accordion-box">
                            <li class="accordion block active-block">
                                <div class="acc-btn active">
                                    <div class="icon-outer"></div>
                                    <h5>Terms and Conditions</h5>
                                </div>
                                <div class="acc-content current">
                                    <div class="text">
                                        <p>By participating in Thrill Trekkers Club activities, you agree to our terms, which include adhering to safety guidelines and acknowledging the risks involved in outdoor adventures. We may update these terms, and continued participation means acceptance of the changes.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"></div>
                                    <h5>Liability</h5>
                                </div>
                                <div class="acc-content">
                                    <div class="text">
                                        <p>Participation in outdoor activities carries inherent risks. By joining our sessions, you accept these risks and release Thrill Trekkers Club from liability for any injuries or damages. A liability waiver must be signed before participation.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"></div>
                                    <h5>Cancellation Policies</h5>
                                </div>
                                <div class="acc-content">
                                    <div class="text">
                                        <p>Cancellations made more than 48 hours in advance will receive a full refund. Cancellations within 48 hours may incur a fee. If we cancel due to unforeseen circumstances, you will be notified and offered a reschedule or full refund.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"></div>
                                    <h5>Privacy Policy</h5>
                                </div>
                                <div class="acc-content">
                                    <div class="text">
                                        <p>Thrill Trekkers Club is committed to protecting your privacy. We collect personal information solely for booking and safety purposes and do not share it with third parties without your consent. You can request access to or correction of your data at any time.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- activities-details end -->



@endsection

@section('page_script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    function toggleBookButton(sessionId) {
        const checkbox = document.getElementById('terms-checkbox-' + sessionId);
        const button = document.getElementById('book-button-' + sessionId);
        if (checkbox.checked) {
            button.classList.remove('disabled');
            button.removeAttribute('aria-disabled');
        } else {
            button.classList.add('disabled');
            button.setAttribute('aria-disabled', 'true');
        }
    }

    $(document).on('click', '.book-session-btn', function() {
        var sessionId = $(this).data('session-id');
        $.ajax({
            url: '/activities/sessions/book/' + sessionId,
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}'
            },
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    toastr.success(response.success);
                    $('#slots-available-' + sessionId).text(response.slots_available + ' slots available');
                    var bookButton = $('#book-button-' + sessionId);
                    bookButton.text('Booked');
                    bookButton.removeClass('btn-primary'); 
                    bookButton.addClass('btn-success'); 
                    bookButton.prop('disabled', true); 
                }
            },
            error: function(xhr) {
                if (xhr.status === 403) {
                    toastr.error('You need to sign in to book a session.');
                } else {
                    toastr.error(xhr.responseJSON.error || 'An error occurred. Please try again.');
                }
            }
        });
    });
</script>
@endsection