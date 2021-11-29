<html>
    <head>
        @include('master.css')

        <style type="text/css">
            .hover:hover {
                background-color: #FF7043;
                color: white !important;
                padding-top:10px;
                padding-bottom: 10px;
            }
        </style>
    </head>
    <body>
        @include('sweetalert::alert')
        <div class="row h-100">
            <div class="col-lg-3 h-100">
                <div class="card h-100 z-depth-0 deep-orange rounded-0">
                    <div class="card-body">
                        <div class="row mt-5">
                            <div class="col-lg-12">
                                <a href="" class="hover w-100 d-flex justify-content-between align-items-center pr-2 pl-2 text-white" style="font-weight:500;">
                                    Home
                                    <i class="fas fa-chart-pie"></i>
                                </a>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <a data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample" class="text-white d-flex justify-content-between align-items-center hover pr-2 pl-2">
                                    Member
                                    <i class="fas fa-chevron-down"></i>
                                </a>
                            </div>
                        </div>
                        <div class="collapse" id="collapseExample">
                            <div class="row mt-4">
                                <div class="col-lg-12">
                                    <a href="{{ route('admin.member_list', Auth::user()->id) }}" class="pl-2 pr-2 hover d-flex justify-content-between align-items-center text-white">
                                        Member List
                                        <i class="fas fa-user"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <a data-toggle="collapse" href='#campus' aria-expanded="false" aria-controls="campus" class="text-white d-flex justify-content-between align-items-center hover pr-2 pl-2">
                                    Campus
                                    <i class='fas fa-chevron-down'></i>
                                </a>
                            </div>
                        </div>
                        <div class="collapse" id="campus">
                            <div class="row mt-4">
                                <div class="col-lg-12">
                                    <a href="{{ route('campus', Auth::user()->id) }}" class="pl-2 pr-2 hover d-flex justify-content-between text-white align-items-center hover pl-2 pr-2">
                                        Campus List
                                        <i class="fas fa-school"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <a class="pl-2 pr-2 hover d-flex justify-content-between text-white" href="javascript:void();" onclick="document.getElementById('logout').submit();">
                                    Log Out
                                </a>
                                <form method="post" action="{{ route('logout') }}" id="logout">
                                    @csrf
                                </form>
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