@include('layouts/header')
<section class="login-page">
    <div class="login-header box-shadow">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="brand-logo">
                <a href="{{ route('login')}}">
                    <img src="{{ asset('vendors/images/logo.png') }}" alt="">
                </a>
            </div>
            <div class="login-menu">
                <ul>
                    <li><a href="{{ route('login')}}">login</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-7">
                <img src="{{ asset('vendors/images/register-page-img.png')}}" alt="">
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="register-box bg-white box-shadow border-radius-10">
                    <div class="wizard-content">

                    <form method="POST" action="{{ route('register') }}" class="tab-wizard2 wizard-circle wizard">
                        @csrf
                        <h5>Basic Account Credentials</h5>
                            <section>
                        <div class="form-wrap max-width-600 mx-auto">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Email Address*</label>
                                    <div class="col-sm-8">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>    

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Password*</label>
                            <div class="col-sm-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Confirm Password*</label>
                            <div class="col-sm-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                    </div>
</section>
<!-- Step 2 -->
    <h5>Personal Information</h5>
    <section>
        <div class="form-wrap max-width-600 mx-auto">
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Username*</label>
                <div class="col-sm-8">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div> 
            <div class="form-group row align-items-center">
                                        <label class="col-sm-4 col-form-label">type*</label>
                                        <div class="col-sm-8">
                                            <div class="custom-control custom-radio custom-control-inline pb-0">
                                                <input type="radio" id="male" name="type" value="student" class="custom-control-input">
                                                <label class="custom-control-label" for="male">Student</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline pb-0">
                                                <input type="radio" id="female" name="type" value="teacher" class="custom-control-input">
                                                <label class="custom-control-label" for="female">Teacher</label>
                                            </div>
                                            @error('type')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                   
                                </div>
                            </section>
                            <!-- Step 3 -->
                            
                           

                        <!-- <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- success Popup html Start -->
<button type="button" id="success-modal-btn" hidden data-toggle="modal" data-target="#success-modal" data-backdrop="static">Launch modal</button>
<div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered max-width-400" role="document">
        <div class="modal-content">
            <div class="modal-body text-center font-18">
                <h3 class="mb-20">Form Submitted!</h3>
                <div class="mb-30 text-center"><img src="{{ asset('vendors/images/success.png')}}"></div>
                Are you sure you will be redirected to the login page :)
            </div>
            <div class="modal-footer justify-content-center">
                <button class="btn btn-primary" > Done </button>
            </div>
        </form>

        </div>
    </div>
</div>
<!-- success Popup html End -->
<!-- js -->

</section>

@include('layouts/footer')

