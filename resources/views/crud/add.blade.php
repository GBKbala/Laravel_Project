@extends('layout.app')
@section('content')

<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Register</div>
                        <div class="card-body">
                            <form  action="{{route('crud.store')}}" method="POST" enctype="multipart/form-data">

                               @csrf

                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-left">Full Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="full_name" class="form-control" name="name">
                                        @error('name')<div class=" alert alert-danger">{{ $message }}</div>@enderror
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-left">E-Mail Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control" name="email">
                                        @error('email')<div class=" alert alert-danger">{{ $message }}</div>@enderror
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-left">Phone Number</label>
                                    <div class="col-md-6">
                                        <input type="text" id="phone_number" class="form-control" name="phone">
                                        @error('phone')<div class=" alert alert-danger">{{ $message }}</div>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="present_address" class="col-md-4 col-form-label text-md-left">Gender</label>
                                    <div class="col-sm-6">
                                        <!-- <input type="text" id="present_address" class="form-control"> -->
                                        <select name="gender" id="" class="form-control">
                                            <option value="">-select-</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                        @error('gender')<div class=" alert alert-danger">{{ $message }}</div>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="permanent_address" class="col-md-4 form-check-label text-md-left">Languages</label>
                                    <div class="col-sm-2 form-check form-check-inline px-3">
                                        <input type="checkbox" id="permanent_address" class="form-check" name="languages[]" value="tamil">Tamil
                                        <!-- <label class="form-check-label" for="inlineCheckbox1">Tamil</label> -->
                                    </div>
                                    <div class="col-md-2 form-check form-check-inline">
                                        <input type="checkbox" id="permanent_address" class="form-check" name="languages[]" value="english">English
                                    </div>
                                    <div class="col-md-2 form-check form-check-inline">
                                        <input type="checkbox" id="permanent_address" class="form-check" name="languages[]" value="hindi">Hindi

                                    </div>
                                    @error('languages')<div class=" alert alert-danger">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group row">
                                    <label for="nid_number" class="col-md-4 col-form-label text-md-left">Image</label>
                                    <div class="col-md-6">
                                        <input type="file" id="nid_number" class="form-control" name="image">
                                        @error('image')<div class=" alert alert-danger">{{ $message }}</div>@enderror
                                    </div>
                                </div>

                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                        Submit
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>

</main>
@endsection

