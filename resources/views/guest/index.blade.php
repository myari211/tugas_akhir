@extends('guest.layouts.app')
@section('content')
<div class="d-none d-lg-block">
    <div class="row">
        <div class="col-lg-12">
            <div id="show_bg_2" class="d-flex align-items-center">
                <div class="w-100">
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <span class="animated fadeIn slow" style="font-size:60px;">We Are</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <span class="animated fadeIn slower" style="font-size:60px;">Volley Ball <span style="font-weight:600" class="deep-orange-text">Team.</span></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <span class="animated fadeIn delay-1s" style="font-size:30px;">Trust Your <span class="deep-orange-text" style="font-weight:600">Coach</span>, Trust Your <span class="deep-orange-text" style="font-weight:600">Teamates</span>, Trust <span class="deep-orange-text" style="font-weight:600">Yourself</span></span>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <button type="button" class="btn btn-lg rounded-pill z-depth-0 btn-deep-orange animated fadeIn delay-2s" onclick="location.href='/login';">
                                Join Us
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="card z-depth-0 pr-4 pb-4 pl-4 rounded-0" style="border:1.5px solid #ff5722;">
                    <div class="card-body">
                        <div class="row" style="margin-top:-44px;">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <span class="badge z-depth-0 rounded-pill bg-white" style="font-size:30px; color: #ff5722 !important;">Lastest News</span>
                            </div>
                        </div>
                        <div class="row mt-4">
                            @for($i = 0; $i < 3; $i++)
                                <div class="col-lg-4">
                                    <div class="card rounded-0">
                                        <div class="card-body p-0 pb-3 flex-column">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <img src="{{ asset('images/login.jpg') }}" class="w-100">
                                                </div>
                                            </div>
                                            <div class="container">
                                                <div class="row mt-2">
                                                    <div class="col-lg-12">
                                                        <small class="text-muted">{{ date('M Y, d', strtotime("01/01/2021")) }}</small>
                                                    </div>
                                                </div>
                                                <div class="row mt-1 mb-5">
                                                    <div class="col-lg-12">
                                                        <span style="font-size:20px;">Content Title</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-auto">
                                                    <div class="col-12 d-flex justify-content-end">
                                                        <a>Read More <i class="fas fa-chevron-right" style="font-size:12px;"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12 d-flex justify-content-end">
                                <a>See All Our News</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-12">
                <span style="font-size:25px;">Product Us</span>
            </div>
        </div>
        @for($i = 0; $i < 3; $i++)
            <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-lg-4">
                                    <img src="{{ asset('images/login.jpg') }}" class="w-100">
                                </div>
                                <div class="col-lg-8 d-flex align-items-start flex-column">
                                    <div class="row mt-4">
                                        <div class="col-lg-12">
                                            <span style="font-size:30px;">Content Title</span>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-lg-12">
                                            <span>Test Test Test Test Test Test Test Test Test Test Test TestTest Test TestTest Test Test </span>
                                        </div>
                                    </div>
                                    <div class="mt-auto mb-3">
                                        <div class="col-lg-12 d-flex justify-content-end">
                                            <button type="button" class="btn btn-md btn-deep-orange rounded-0 m-0">
                                                Check out
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endfor
    </div>
</div>

<div class="d-block d-lg-none">
    <div class="row">
        <div class="col-lg-12">
            <div id="show_bg_2_mobile" class="d-flex align-items-center">
                <div class="w-100">
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <span class="animated fadeIn slow" style="font-size:40px;">We Are</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <span class="animated fadeIn slower" style="font-size:40px;">Volley Ball <span style="font-weight:600" class="deep-orange-text">Team.</span></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <span class="animated fadeIn delay-1s" style="font-size:13px;">Trust Your <span class="deep-orange-text" style="font-weight:600">Coach</span>, Trust Your <span class="deep-orange-text" style="font-weight:600">Teamates</span>, Trust <span class="deep-orange-text" style="font-weight:600">Yourself</span></span>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <button type="button" class="btn btn-md rounded-pill z-depth-0 btn-deep-orange animated fadeIn delay-2s" onclick="location.href='/login';">
                                Join Us
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection