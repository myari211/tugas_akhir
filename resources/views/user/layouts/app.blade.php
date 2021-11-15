<html>
<head>
    @include('master.css')
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-white">
        <div class="row w-100">
            <div class="col-lg-12 d-flex justify-content-between align-items-center">
                <img src="{{ asset('images/gunadarma.png') }}" style="width:80px; height:80px;">
                <div class="dropleft">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <span class="mr-2" style="font-weight:600">{{ Auth::user()->first_name." ".Auth::user()->last_name }}</span>
                        <img src="{{ asset('avatar/'.Auth::user()->avatar) }}" style="width:60px; height:60px;" class="rounded-circle">
                    </a>
                    <div class="dropdown-menu pt-5 pr-5 pl-5">
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
    </nav>
    @yield('content')
    @include('master.js')
</body>
</html>