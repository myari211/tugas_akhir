@extends('admin.layouts.app')
@section('content')
    <div class="container">
    <div class="row mt-4">
        <div class="col-lg-12 d-flex justify-content-between align-items-center">
            <span style="font-size:30px; font-weight:600">Member <span class="deep-orange-text">List</span></span>
            <button type="button" class="btn btn-deep-orange rounded-circle p-3 m-0" data-toggle="modal" data-target="#create_member">
                <i class="fas fa-plus"></i>
            </button>
        </div>
    </div>
    <div class="row mt-4">
        @foreach($member as $data)
            <div class="col-lg-4 mb-4">
                <div class="card rounded-0 h-100">
                    <div class="card-body d-flex align-items-center flex-column">
                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-center">
                                @if($data->avatar === null)
                                    <img src="{{ Avatar::create($data->first_name.' '.$data->last_name) }}" style="width:150px; height:150px;">
                                @else
                                    <img src="{{ asset('avatar/'.$data->avatar) }}" style="width:150px; height:150px;" class="rounded-circle">    
                                @endif
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <span style="font-size:20px; font-weight: 600;">{{ $data->first_name." ".$data->last_name }}</span>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <span class="badge deep-orange text-white pt-2 pb-2 pr-3 pl-3 rounded-pill z-depth-0">{{ $data->campus }}</span>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <small>{{ ucwords(strtolower($data->city)) }}</small>
                            </div>
                        </div>
                        <div class="row mt-auto">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <button type="button" class="btn btn-md rounded-pill z-depth-0 btn-deep-orange" style="font-weight:600  " onclick="location.href='{{ route('talent-list', $data->user_id) }}';">
                                    View
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


    {{-- modal --}}
    <div class="modal fade" id="create_member" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-12">
                                    <span style="font-size:30px; font-weight:600">Create <span class="deep-orange-text">Member</span></span>
                                </div>
                            </div>
                            <form method="post" action="{{ route('create_member', Auth::user()->id) }}">
                                @csrf
                                <div class="row mt-4">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="first_name" class="deep-orange-text" style="font-weight:600">First Name</label>
                                            <input type="text" name="first_name" class="form-control rounded-0">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="last_name" class="deep-orange-text" style="font-weight:600">Last Name</label>
                                            <input tyoe="text" name="last_name" class="form-control rounded-0">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="email" class="deep-orange-text" style="font-weight:600">Email</label>
                                            <input type="email" class="form-control rounded-0" name="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="password" class="deep-orange-text" style="font-weight:600">Password</label>
                                            <input type="password" class="form-control rounded-0" name="password">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 d-flex justify-content-center">
                                        <button type="submit" class="btn btn-md btn-deep-orange rounded-pill z-depth-0">Save changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection