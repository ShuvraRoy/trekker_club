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
                    <h2 class="font-weight-bold text-5 mb-0">Login</h2><br>
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
                        <div class="row">
                            <div class="form-group col" style="text-align: center;">
                                <p sstyle="color:#00000;">Don't have an account ! Please sign up now</p>
                                <a href="{{ url('/register') }}" class="btn btn-dark" data-loading-text="Loading...">Register</a>
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="form-group col">
                                <button type="submit" class="btn btn-primary btn-modern w-100 text-uppercase  font-weight-bold text-3 py-3" data-loading-text="Loading...">Login</button>
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