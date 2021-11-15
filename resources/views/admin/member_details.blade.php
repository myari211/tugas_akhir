@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <div class="row mt-5">
            @foreach($personal as $data)
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card rounded-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12 d-flex justify-content-center">
                                            @if($data->avatar === null)
                                                <img src="{{ Avatar::create($data->first_name." ".$data->last_name) }}" style="width:200px; height: 200px;">
                                            @else
                                                <img src="{{ asset('avatar/'.$data->avatar) }}" style="width:200px; height:200px;" class="rounded-circle">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-lg-12 d-flex justify-content-center">
                                            <span style="font-size:30px; font-weight:600">{{ $data->first_name }} <span class="deep-orange-text">{{ $data->last_name }}</span></span>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-lg-12 d-flex justify-content-center">
                                            @if($data->gender === "male")
                                                <span class="badge badge-primary z-depth-0">
                                                    <i class="fas fa-mars" style="font-size:20px;"></i>
                                                </span>
                                            @else
                                                <span class="badge pink lighten-4 text-white z-depth-0">
                                                    <i class="fas fa-venus" style="font-size:20px;"></i>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <span>
                                                <i class="fas fa-phone deep-orange-text mr-2"></i>
                                                +62 - {{ $data->no_telp }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-lg-12">
                                            <span>
                                                <i class="fas fa-map-marker-alt mr-2 deep-orange-text"></i>
                                                {{ ucwords(strtolower($data->province." ,".$data->city)) }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-lg-12">
                                            <span>
                                                <i class="fas fa-home mr-2 deep-orange-text" style="font-size:20px;"></i>
                                                {{ $data->address }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            @foreach($class_information as $data)
                <div class="col-lg-8">
                    <div class="card rounded-0">
                        <div class='card-body'>
                            <div class="row">
                                <div class="col-lg-12">
                                    <span style="font-size:30px; font-weight:600">Class Informa<span class="deep-orange-text">tions</span></span>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-12">
                                    <span class="deep-orange-text" style="font-weight:600">
                                        NPM
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <span>{{ $data->npm }}</span>
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
                                            <span class="deep-orange-text" style="font-weight:600">Location</span>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class="col-lg-12">
                                            <span>{{ ucwords(strtolower($data->province.', '.$data->city)) }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-12">
                                            <span class="deep-orange-text" style="font-weight:600">Major</span>
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
                                            <span class="deep-orange-text" style="font-weight:600">Class</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <span>{{ $data->class }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-12">
                                    <span class="deep-orange-text" style="font-weight:600">Reason</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <span>{{ $data->reason }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection