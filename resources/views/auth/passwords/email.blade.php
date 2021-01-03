@include('layouts/header')

<section>
<div class="login-header box-shadow">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <div class="brand-logo">
            <a href="login.blade.php">
                <img src="{{ asset('vendors/images/logo.png') }}" alt="">
            </a>
        </div>
        <div class="login-menu">
            <ul>
                <li><a href="login.blade.php">Login</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="{{ asset('vendors/images/forgot-password.png') }}" alt="">
            </div>
            <div class="col-md-6">
                <div class="login-box bg-white box-shadow border-radius-10">
                    <div class="login-title">
                        <h2 class="text-center text-primary">Forgot Password</h2>
                    </div>
                    <h6 class="mb-20">Enter your email address to reset your password</h6>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="input-group custom">
                                <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="input-group-append custom">
                                <span class="input-group-text"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-5">
                                <div class="input-group mb-0">
                                    <!--
                                        use code for form submit
                                        <input class="btn btn-primary btn-lg btn-block" type="submit" value="Submit">
                                    -->
                                    <button class="btn btn-primary btn-lg btn-block">Submit</button>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="font-16 weight-600 text-center" data-color="#707373">OR</div>
                            </div>
                            <div class="col-5">
                                <div class="input-group mb-0">
                                    <a class="btn btn-outline-primary btn-lg btn-block" href="{{route('login')}}">Login</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</section>
@include('layouts/footer')
