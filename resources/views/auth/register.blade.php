<html>
    <head>
        @include('master.css')
        <style type="text/css">
            #show_bg_2 {
                background-image:
                linear-gradient(to right, rgba(246, 211, 101, 0.2), rgba(243, 99, 59, 0.5)),
                url('{{ asset("images/volley.jpg") }}');
                width: 100%;
                height: 100%;
                background-size: cover;
                color: white;
                padding: 20px;
            }

            #show_bg_2_mobile {
                background-image:
                linear-gradient(to right, rgba(246, 211, 101, 0.2), rgba(243, 99, 59, 0.5)),
                url('{{ asset("images/volley.jpg") }}');
                width: 100%;
                height: 300px;
                background-size:cover;
                color:white;
                padding: 20px;
            }
        </style>
    </head>
    <body>
        <div class="d-none d-lg-block">
            <div class="row h-100">
                <div class="col-lg-6">
                    {{-- <img src="{{ asset('images/login.jpg') }}" class="w-100 h-100"> --}}
                    <div id="show_bg_2" class="d-flex justify-content-center align-items-center">
                        <div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <span style="font-size:50px;">Great Things</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <span style="font-size:50px;">Never Come</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <span style="font-size:50px;">From Comfort Zones</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="container">
                        <form method="post" action="{{ route('guest.register') }}">
                            @csrf
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-8">
                                    <span style="font-weight:700; font-size:50px;">Sign <span class="deep-orange-text">Up</span></span>
                                </div>
                            </div>
                            <div class="row mt-5 d-flex justify-content-center">
                                <div class="col-lg-4">
                                    <div class="md-form md-outline input-with-post-icon m-0">
                                        <input type="text" class="form-control rounded" name="first_name" id="first_name" placeholder="First Name" style="height: 50px;">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="md-form md-outline input-with-post-icon m-0">
                                        <input type="text" class="form-control rounded" name="last_name" id="last_name" placeholder="Last Name" style="height: 50px">
                                        <i class="fas fa-user input-prefix"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2 d-flex justify-content-center">
                                <div class="col-lg-8">
                                    <div class="md-form md-outline input-with-post-icon m-0">
                                        <input type="email" class="form-control rounded-0" name="email" id="email" placeholder="Email" style="height:50px;">
                                        <i class="fas fa-envelope input-prefix"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2 d-flex justify-content-center">
                                <div class="col-lg-8">
                                    <div class="md-form md-outline input-with-post-icon m-0" style="height:50px;">
                                        <input type="password" class="form-control rounded-0" name="password" id="password" style="height:50px" placeholder="Password">
                                        <i class="fas fa-lock input-prefix"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2 d-flex justify-content-center">
                                <div class="col-lg-8">
                                    <div class="md-form md-outline input-with-post-icon m-0" style="height: 50px;">
                                        <input type="password" class="form-control rounded-0" name="password_confirmation" id="password_confirmation" style="height: 50px;" placeholder="Retype Password">
                                        <i class="fas fa-lock input-prefix"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5 d-flex justify-content-center">
                                <div class="col-lg-8">
                                    <button type="submit" class="btn btn-deep-orange btn-block rounded-pill z-depth-0">
                                        Sign Up
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-block d-lg-none d-flex flex-column h-100">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <span style="font-size:30px; font-weight:600">Sign <span class="deep-orange-text">In</span></span>
                    </div>
                </div>
                <form method="post" action="{{ route('login') }}">
                    @csrf
                    <div class="row mt-5">
                        <div class="col-12">
                            <div class="md-form md-outline input-with-post-icon mt-0 mb-0">
                                <input type="email" class="form-control rounded-0" name="email" id="email" placeholder="email">
                                <i class="fas fa-envelope input-prefix"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="md-form md-outline input-with-post-icon mt-0 mb-0">
                                <input type="password" class="form-control rounded-0" name="password" id="password" placeholder="password">
                                <i class="fas fa-lock input-prefix"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-12">
                            <button type="submit" class="btn btn-md text-white deep-orange rounded-0 btn-block z-depth-0">
                                Sign In
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row mt-auto">
                <div class="col-12">
                    <div id="show_bg_2_mobile" class="d-flex align-items-center justify-content-center">
                        <div>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <span style="font-size:30px;">Great Things</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <span style="font-size:30px;">Never Come</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <span style="font-size:30px;">From Comfort Zones</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('master.js')
    </body>
</html>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

{{-- <div class="container">
    <div class="row" style="margin-top:120px;">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}