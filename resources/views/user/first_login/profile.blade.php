<html>
    <head>
        @include('master.css')
    </head>
    <body>
        <div class="container h-100">
            <div class="row h-100 d-flex align-items-center justify-content-center">
                <div class="col-lg-8">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 d-flex justify-content-center">
                                    <img src="{{ Avatar::create(Auth::user()->first_name." ".Auth::user()->last_name) }}" style="width:150px; height:150px;">
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="first_name">First Name</label>
                                        <input type="text" class="form-control rounded-0" name="first_name" id="first_name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" class="form-control rounded-0" name="last_name" id="last_name">
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
                                    <button type="submit" class="btn btn-deep-orange btn-md btn-block rounded">
                                        Next Step
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('master.js')
    </body>
</html>