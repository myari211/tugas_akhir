<html>
    <head>
        @include('master.css')
    </head>
    <body>
        <div class="row h-100">
            <div class="col-lg-3 h-100">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <img src="{{ asset('images/gunadarma.png') }}">
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-lg-12">
                                <a href="">Home</a>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <a data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                    Member
                                </a>
                            </div>
                        </div>
                        <div class="collapse" id="collapseExample">
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="{{ route('admin.member_list', Auth::user()->id) }}">Member List</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                @yield('content')
            </div>
        </div>
        @include('master.js')
    </body>
</html>