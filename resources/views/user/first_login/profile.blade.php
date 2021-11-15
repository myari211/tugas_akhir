<html>
    <head>
        @include('master.css')
    </head>
    <body>
        <div class="container h-100">
            <div class="row h-100 d-flex align-items-center justify-content-center mt-4 mb-4">
                <div class="col-lg-8">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-12">
                                    <span style="font-size:30px; font-weight:700">Personal Infor<span class="deep-orange-text">mation</span></span>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-12 d-flex justify-content-center">
                                    <div>
                                        @if(Auth::user()->avatar === null)
                                            <img src="{{ Avatar::create(Auth::user()->first_name." ".Auth::user()->last_name) }}" style="width:150px; height:150px;">
                                        @else
                                            <img src="{{ asset('avatar/'.Auth::user()->avatar) }}" style="width:150px; height:150px;" class="rounded-circle">
                                        @endif
                                    </div>    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 d-flex justify-content-center">
                                    <button type="button" class="btn btn-md p-3 btn-deep-orange rounded-circle" style="margin-left:130px; margin-top:-40px;" data-toggle="modal" data-target="#avatar">
                                        <i class="fas fa-camera" style="font-size:18px;"></i>
                                    </button>
                                </div>
                            </div>
                            <form method="post" action="{{ route('talent.first.post', Auth::user()->id) }}">
                                @csrf
                                <div class="row mt-4">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" name="first_name" class="form-control rounded-0" id="first_name" value="{{ Auth::user()->first_name }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" name="last_name" class="form-control rounded-0" id="last_name" value="{{ Auth::user()->last_name }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="gender">Gender</label>
                                            <select name="gender" class="form-control rounded-0" id="gender">
                                                <option value="male">Male</option>
                                                <option value="female">Femail</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="number" class="form-control rounded-0" name="phone" id="phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="provinces">Provinces</label>
                                            <select name="provinces" class="form-control rounded-0" id="provinces">
                                                @foreach($province as $key => $data)
                                                    <option value="{{ $key }}">{{ ucwords(strtolower($data)) }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="city">City</label>
                                            <select name="city" class="form-control rounded-0" id="city">
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Address</label>
                                            <textarea class="form-control rounded-0" name="address" id="exampleFormControlTextarea1" rows="6"></textarea>
                                          </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-deep-orange btn-md btn-block roundedq">
                                            Next Step
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- modal --}}

        <div class="modal fade" id="avatar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">                    
                    <div class="modal-body">
                        <form method="post" action="{{ route('avatar', Auth::user()->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <span style="font-size:30px; font-weight:600">
                                        Upload Av<span class="deep-orange-text">atar</span>
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="file" id="customFileLang" lang="in">
                                        <label class="custom-file-label" for="customFileLang">pilih file </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-12 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-md btn-deep-orange rounded-0">
                                        Upload    
                                    </button>                        
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @include('master.js')
    </body>
</html>