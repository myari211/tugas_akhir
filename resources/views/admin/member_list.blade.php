@extends('admin.layouts.app')
@section('content')
    <div class="row mt-4">
        <div class="col-lg-12 d-flex justify-content-end">
            <button type="button" class="btn btn-primary rounded-0 p-3 m-0" data-toggle="modal" data-target="#create_member">
                <i class="fas fa-plus"></i>
            </button>
        </div>
    </div>
    <div class="row mt-4">
        @foreach($member as $data)
            <div class="col-lg-4">
                <div class="card rounded-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-center">
                                @if($data->avatar === null)
                                    <img src="{{ Avatar::create($data->first_name.' '.$data->last_name) }}" style="width:150px; height:150px;">
                                @endif
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <span style="font-size:20px; font-weight: 600;">{{ $data->first_name." ".$data->last_name }}</span>
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
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" name="first_name" class="form-control rounded-0">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input tyoe="text" name="last_name" class="form-control rounded-0">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="email">Email</label>
                                <input type="email" class="form-control rounded-0" name="email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="password">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <button type="button" class="btn btn-md btn-danger" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary btn-md">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection