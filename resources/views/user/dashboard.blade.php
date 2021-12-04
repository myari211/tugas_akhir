@extends('user.layouts.app')
@section('content')
{{-- <div class="container">
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
</div> --}}
<div class="d-none d-lg-block">
    <div class="row">
        <div class="col-lg-12">
            <div id="show_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4" style="margin-top:130px;">
                            <img src="{{ asset('avatar/'.Auth::user()->avatar) }}" style="width:300px; height:300px;" class="rounded-circle bg-white border">
                        </div>
                        <div class="col-lg-8 d-flex align-items-center">
                            <div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span style="font-size:40px; font-weight:600">{{ Auth::user()->first_name.' '.Auth::user()->last_name }}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span class="badge deep-orange pt-2 pb-2 pr-3 pl-3 rounded-pill z-depth-0" style="font-size:13px;">{{ $class->major }} - {{ $class->npm }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-8 offset-4">
            <div class="row">
                <div class="col-lg-12">
                    <span style="font-weight:600; font-size:30px;" class="deep-orange-text">Personal Information</span>
                </div>
            </div>
            @foreach($personal as $data)
                <div class="row mt-4">
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <i class="fas fa-phone" style="font-size:25px;"></i>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <span style="font-weight:600" class="deep-orange-text">No Telp</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        +62 - {{ $data->no_telp }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <i class="fas fa-envelope" style="font-size:25px;"></i>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <span style="font-weight:600" class="deep-orange-text">Email</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <span>{{ Auth::user()->email }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        @if($data->gender === "male")
                                            <i class="fas fa-mars" style="font-size:25px;"></i>
                                        @else
                                            <i class="fas fa-venus" style="font-size:25px;"></i>
                                        @endif
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <span style="font-weight:600" class="deep-orange-text">Gender</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <span>{{ ucwords(strtolower($data->gender)) }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <i class="fas fa-map" style="font-size:25px;"></i>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-12">
                                        <span style="font-weight:600" class="deep-orange-text">Province</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <span>{{ ucwords(strtolower($data->provinces)) }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <i class="fas fa-map-marked" style="font-size:25px;"></i>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-12">
                                        <span style="font-weight:600" class="deep-orange-text">City</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span>{{ ucwords(strtolower($data->city)) }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <i class="fas fa-map-marker-alt" style="font-size:25px;"></i>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <span style="font-weight:600" class="deep-orange-text">Address</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <small>{{ ucwords(strtolower($data->address)) }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-8 offset-4">
            <div class="row">
                <div class="col-lg-12">
                    <span class="deep-oranget-text" style="font-size: 30px; font-weight:600;">University Information</span>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-9">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <span class="fas fa-school deep-orange-text" style="font-size:100px;"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <span style="font-size:20px; font-weight:600" class="deep-orange-text">{{ $class->name_university }}</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <span>{{ $class->address }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="d-block d-lg-none">
    <div class="row">
        <div class="col-12">
            <div id="show_bg_mobile">
                <div class="row" style="margin-top:70px;">
                    <div class="col-12 d-flex justify-content-center">
                        <image src="{{ asset('avatar/'.Auth::user()->avatar) }}" style="width:150px; height:150px; border:2px solid #ffffff;" class="rounded-circle">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 d-flex justify-content-center">
                        <span style="font-size:20px; font-weight:600">{{ Auth::user()->first_name." ".Auth::user()->last_name }}</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <span>{{ Auth::user()->email }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <span style="font-size:20px; font-weight:600" class="deep-orange-text">Personal Information</span>
            </div>
        </div>
        <div class="row mt-4">
            @foreach($personal as $data)
            <div class="col-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <i class="fas fa-phone" style="font-size:25px;"></i>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <span style="font-weight:600" class="deep-orange-text">Phone</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <span>+62 {{ $data->no_telp }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <i class="fas fa-envelope" style="font-size:25px;"></i>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <span style="font-weight:600" class="deep-orange-text">Email</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <span>{{ Auth::user()->email }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                @if($data->gender === "male")
                                    <i class="fas fa-mars" style="font-size:25px;"></i>
                                @else
                                    <i class="fas fa-venus" style="font-size:25px;"></i>
                                @endif
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <span class="deep-orange-text" style="font-weight:600">Gender</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <span>{{ ucwords($data->gender) }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <i class="fas fa-map" style="font-size:25px;"></i>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <span class="deep-orange-text" style="font-weight:600">Provinces</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <span>{{ ucwords(strtolower($data->provinces)) }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <i class="fas fa-map-marked" style="font-size:25px;"></i>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <span class="deep-orange-text" style="font-weight:600">City</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <span>{{ ucwords(strtolower($data->city )) }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <i class="fas fa-map-marked" style="font-size:25px;"></i>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <span class="deep-orange-text" style="font-weight:600">Address</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <span>{{ ucwords(strtolower($data->address )) }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row mt-1">
            <div class="col-12">
                <span style="font-size:30px; font-weight:600" class="deep-orange-text">Class Information</span>
            </div>
        </div>
        <div class="row mt-4">
            @foreach($class as $data)
                <div class="col-6 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <i class="fas fa-school" style="font-size:25px;"></i>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12">
                                    <span class="deep-orange-text" style="font-weight:600">University</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    {{-- <small>{{ ucwords(strtolower($data->campus)) }}</small> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <i class="fas fa-map" style="font-size:25px;"></i>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12">
                                    <span class="deep-orange-text" style="font-weight:600">Province</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    {{-- <small>{{ ucwords(strtolower($data->province)) }}</small> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <i class="fas fa-map-marked" style="font-size:25px;"></i>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12">
                                    <span class="deep-orange-text" style="font-weight:600">City</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    {{-- <small>{{ ucwords(strtolower($data->city)) }}</small> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <i class="fas fa-user-tie" style="font-size:25px;"></i>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12">
                                    <span class="deep-orange-text" style="font-weight:600">Major</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    {{-- <small>{{ $data->major }}</small> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <i class="fas fa-school style="font-size:25px;"></i>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12">
                                    <span class="deep-orange-text" style="font-weight:600">Class</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    {{-- <small>{{ $data->class }}</small> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection 