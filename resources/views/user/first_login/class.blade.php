@extends('user.layouts.app')
@section('content')
    <div class="container h-100">
        <div class="row h-100 d-flex justify-content-center">
            <div class="col-lg-6 d-flex align-items-center">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <span style="font-size:30px; font-weight:600">Class Infor<span class="deep-orange-text">mation</span></span>
                            </div>
                        </div>
                        <form method="post" action="{{ route('class_information', Auth::user()->id) }}">
                            @csrf
                            <div class="row mt-3">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="npm">NPM</label>
                                        <input type="number" class="form-control rounded-0" name="npm" id="npm">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="campuss">Campus</label>
                                        <input type="text" name="campus" class="form-control rounded-0" id="campus">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="major">Major</label>
                                        <input type="text" name="major" class="form-control rounded-0" id="major"> 
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="class">Class</label>
                                        <input type="text" name="class" class="form-control rounded-0" id="class">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="province">Provinces</label>
                                        <select name="province" class="form-control rounded-0" id="provinces">
                                            @foreach($provinces as $key => $data)
                                                <option value="{{ $key }}">{{ $data }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <select name="city" class="form-control rounded-0" id="city">
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-12">
                                    <label for="reason">Reason</label>
                                    <input type="text" class="form-control rounded-0" id="reason" name="reason">
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-lg btn-deep-orange btn-block rounded-0">
                                        Go To Dashboard
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 