@extends('user.layouts.app')
@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-lg-3">
            <div class="card rounded-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center">
                            @if(Auth::user()->avatar === null)
                                <img src="{{ Avatar::create(Auth::user()->first_name.'_'.Auth::user()->last_name) }}">
                            @else
                                <img src="{{ asset('avatar/'.Auth::user()->avatar) }}" class="rounded-circle" style="width:200px; height:200px;">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="card rounded-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <span style="font-weight:600; font-size:30px;">Personal Infor<span class="deep-orange-text">mation</span></span>
                        </div>
                    </div>
                    @foreach($personal as $data)
                        <div class="row mt-5">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span class="deep-orange-text" style="font-weight:600">No Telp</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span>+62 - {{ $data->no_telp }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span class="deep-orange-text" style="font-weight:600">Gender</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        @if($data->gender === "male")
                                            <span>Pria</span>
                                        @else
                                            <span>Wanita</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span class="deep-orange-text" style="font-weight:600">Province</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span>{{ ucwords(strtolower($data->provinces)) }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span class="deep-orange-text" style="font-weight:600">City</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span>{{ ucwords(strtolower($data->city)) }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <span class="deep-orange-text" style="font-weight:600">Address</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <span>{{ $data->address }}</span>
                            </div>
                        </div>
                    @endforeach
                    <div class="row mt-5">
                        <div class="col-lg-12">
                            <span style="font-size:30px; font-weight:600">Class Infor<span class="deep-orange-text">mation</span></span>
                        </div>
                    </div>
                    @foreach($class as $data)
                        <div class="row mt-5">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span style="font-weight:600" class="deep-orange-text">NPM</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span>{{ $data->npm }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span class="deep-orange-text" style="font-weight:600">Campus</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span>{{ $data->campus }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span style="font-weight:600" class="deep-orange-text">Location</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span>{{ ucwords(strtolower($data->province.", ".$data->city)) }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span style="font-weight:600" class="deep-orange-text">Major</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span>{{ $data->major }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span style="font-weight:600" class="deep-orange-text">Class</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span>{{ $data->class }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 