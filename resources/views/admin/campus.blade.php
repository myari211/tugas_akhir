@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-12 d-flex justify-content-between align-items-center">
                <span style="font-size:30px; font-weight:500"><span class="deep-orange-text">Campus</span> List</span>
                <button type="button" class="btn p-2 deep-orange text-white z-depth-0 rounded-circle" data-toggle="modal" data-target="#createCampus">
                    <i class="fas fa-plus"></i>
                </button>
            </div>
        </div>
        <div class="row mt-5">
            @foreach($campus as $data)
                <div class="col-lg-12 mb-3">
                    <div class="card rounded-0">
                        <div class='card-body'>
                            <div class="row">
                                <div class="col-lg-3">
                                    <i class="fas fa-school deep-orange-text" style='font-size:100px;'></i>
                                </div>
                                <div class="col-lg-6 d-flex align-items-center">
                                    <div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <span style="font-size:30px;">{{ $data->name_university }}</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <span>{{ ucwords(strtolower($data->province)) }}, {{ ucwords(strtolower($data->city)) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 d-flex justify-content-end align-items-start">
                                    <button type="button" class="btn btn-md rounded-0 p-0 z-depth-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">View</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


        <div class="modal fade" id="createCampus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-11">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span style="font-size:30px; font-weight:600">Create <span class="deep-orange-text">Campus</span></span>
                                    </div>
                                </div>
                                <form method="post" action="{{ route('campus_post', Auth::user()->id) }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="md-form">
                                                <label for="campus_name">Campus Name</label>
                                                <input type="text" class="form-control rounded-0" id="campus_name" name="campus_name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <select name="province" class="form-control rounded-0" id="provinces_admin">
                                                    @foreach($province as $key => $data)
                                                        <option value="{{ $key }}">{{ ucwords(strtolower($data)) }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <select name="city" class="form-control rounded-0" id="city_admin">
                                                    <option disabled selected>Select City</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="md-form">
                                                <textarea id="form7" class="md-textarea form-control" rows="3" name="address"></textarea>
                                                <label for="form7">Address</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="md-form">
                                                <label for="zip-code">Zip Code</label>
                                                <input type="text" name="zip_code" class="form-control rounded-0" id="zip_code">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="md-form">
                                                <label for="phone">Phone Number</label>
                                                <input type="text" name="phone_number" class="form-control rounded-0" id="phone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-lg-12 d-flex justify-content-center">
                                            <button type="submit" class="btn btn-md rounded-0 deep-orange text-white">
                                                Create
                                            </button>
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
    <script type="text/javascript">
        $(document).ready(function() {
            $('#provinces_admin').on('change', function () {
                var provinceID = $(this).val();
                if(provinceID) {
                    $.ajax({
                        url:'/chain-city/'+provinceID,
                        type:'GET',
                        dataType: 'json',
                        success: function(data) {
                            $('#city_admin').empty();
                            $.each(data, function(key, value) {
                                console.log(key, value);
                                $('#city_admin').append('<option value="'+ key +'">' + value + '</option>');
                            });
                        },
                        error: function(data) {
                            console.log(data);
                        }
                    })
                }
                else
                {
                    ('#city_admin').empty();
                }
            });
        });
    </script>
@endsection