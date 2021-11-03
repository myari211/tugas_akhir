<html>
    <head>
        @include('master.css')
    </head>
    <body>
        <div class="row h-100">
            <div class="col-lg-6">
                <img src="{{ asset('images/login.jpg') }}" class="w-100 h-100">
            </div>
            <div class="col-lg-6 d-flex align-items-center">
                <div class="container">
                    <form method="post" action="{{ route('login') }}">
                        @csrf
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-8">
                                <span style="font-weight:700; font-size:50px;">Log <span class="deep-orange-text">In</span></span>
                            </div>
                        </div>
                        <div class="row mt-5 d-flex justify-content-center">
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
                        <div class="row mt-4 d-flex justify-content-center">
                            <div class="col-lg-8">
                                <button type="submit" class="btn btn-deep-orange btn-block rounded-0 z-depth-0">
                                    Log In
                                </button>
                            </div>
                        </div>
                    </form>
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
