<html>
<head>
    @include('master.css')
    <style type="text/css">
        #show_bg_2 {
            background-image:
            linear-gradient(to right, rgba(246, 211, 101, 0.9), rgba(243, 99, 59, 0.6)),
            url('{{ asset("images/ball.webp") }}');
            width: 100%;
            height: 300px;
            background-size: cover;
            color: white;
            padding: 20px;
        }

        #show_bg_mobile{
            background-image:
            linear-gradient(to right, rgba(246, 211, 101, 0.9), rgba(243, 99, 59, 0.6)),
            url('{{ asset("images/ball.webp") }}');
            width: 100%;
            /* height: 300px; */
            background-size: cover;
            color: white;
            padding: 20px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark z-depth-0 pt-3 pb-3 fixed-top">
        <div class="container">
            <div class="row w-100">
                <div class="col-lg-12 d-flex justify-content-end align-items-center">
                    {{-- <img src="{{ asset('images/gunadarma.png') }}" style="width:40px; height:40px;"> --}}
                    <div class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <span class="mr-2" style="font-weight:600">{{ Auth::user()->first_name." ".Auth::user()->last_name }}</span>
                            <img src="{{ asset('avatar/'.Auth::user()->avatar) }}" style="width:40px; height:40px;" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu pt-5 pr-5 pl-5 mt-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    @if(Auth::user()->avatar === null)
                                        <img src="{{ Avatar::create(Auth::user()->first_name.' '.Auth::user()->last_name) }}">
                                    @else
                                        <img src="{{ asset('avatar/'.Auth::user()->avatar) }}" class="rounded-circle" style="width:200px; height:200px;">
                                    @endif
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-12 d-flex justify-content-center">
                                    <span style="font-size:20px; font-weight:600">{{ Auth::user()->first_name." ".Auth::user()->last_name }}</span>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-lg-12 d-flex justify-content-center">
                                    <button type="button" class="btn btn-md btn-danger rounded-0" onclick="document.getElementById('logout').submit();">
                                        Log Out
                                    </button>
                                    <form method="post" action="{{ route('logout') }}" id="logout" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
    @include('master.js')
</body>
</html>