@extends('layouts.master')
@section('page_links')
<title>Thrill Trekkers Club</title>
<style>
    .btn-primary:hover {
        color: #fff;
        background-color: #d95210;
        border-color: #000;
    }

    .btn-primary {
        color: #fff;
        background-color: #ff6f29;
        border-color: #000;
        border-radius: 0.25rem;
    }
</style>
@endsection 
@section('content')
    <div class="container">
        <div class="container py-4">
    
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5 mb-5 mb-lg-0">
                    <h2 class="font-weight-bold text-5 mb-0">Sign Up</h2><br>
                    <form method="POST" action="{{ url('/post_registration') }}" id="frmSignIn" class="needs-validation" novalidate="novalidate">
                        @csrf
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label text-color-dark text-3">Full Name <span class="text-color-danger">*</span></label>
                                <input type="text" value="{{ old('name') }}" name="name" class="form-control form-control-lg text-4 @error('name') is-invalid @enderror" required autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label text-color-dark text-3">Email Address <span class="text-color-danger">*</span></label>
                                <input type="email" value="{{ old('email') }}" name="email" class="form-control form-control-lg text-4 @error('email') is-invalid @enderror" required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label text-color-dark text-3">Age <span class="text-color-danger">*</span></label>
                                <input type="number" value="{{ old('age') }}" name="age" class="form-control form-control-lg text-4 @error('age') is-invalid @enderror" required min="0">
                                @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label text-color-dark text-3">Phone Number <span class="text-color-danger">*</span></label>
                                <input type="tel" value="{{ old('phone') }}" name="phone" class="form-control form-control-lg text-4 @error('phone') is-invalid @enderror" required>
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label text-color-dark text-3">Emergency Contact Number <span class="text-color-danger">*</span></label>
                                <input type="tel" value="{{ old('emergency_contact') }}" name="emergency_contact" class="form-control form-control-lg text-4 @error('emergency_contact') is-invalid @enderror" required>
                                @error('emergency_contact')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label text-color-dark text-3">Medical Condition (Optional)</label>
                                <textarea name="medical_condition" 
                                        class="form-control form-control-lg text-4 @error('medical_condition') is-invalid @enderror" 
                                        rows="1" 
                                        style="resize: none; overflow: hidden;" 
                                        oninput="this.style.height = ''; this.style.height = this.scrollHeight + 'px';">{{ old('medical_condition') }}</textarea>
                                @error('medical_condition')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label text-color-dark text-3">Dietary Preference (Optional)</label>
                                <textarea name="dietary_preference" 
                                        class="form-control form-control-lg text-4 @error('dietary_preference') is-invalid @enderror" 
                                        rows="1" 
                                        style="resize: none; overflow: hidden;" 
                                        oninput="this.style.height = ''; this.style.height = this.scrollHeight + 'px';">{{ old('dietary_preference') }}</textarea>
                                @error('dietary_preference')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label text-color-dark text-3">Password <span class="text-color-danger">*</span></label>
                                <input type="password" class="form-control form-control-lg text-4 @error('password') is-invalid @enderror" name="password" required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <small class="form-text text-danger">
                                    Password must be 8-12 characters long, include at least 1 uppercase letter, 1 number, and 1 special character.
                                </small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label text-color-dark text-3">Confirm Password <span class="text-color-danger">*</span></label>
                                <input type="password" class="form-control form-control-lg text-4" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col" style="text-align: center;">
                                <p style="color:#000000;">Already have an account? Please login.</p>
                                <a href="{{ url('/login') }}" class="btn btn-dark" data-loading-text="Loading...">Login</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <button type="submit" class="btn btn-primary btn-modern w-100 text-uppercase font-weight-bold text-3 py-3" data-loading-text="Loading...">Sign up</button>
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
    
        </div>
    
        
    </div>

        
@endsection

@section('page_script')

@endsection