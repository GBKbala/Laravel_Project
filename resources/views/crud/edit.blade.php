
@extends('layout.app')
@section('content')
<!-- <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
    <a class="navbar-brand" href="#">Laravel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Register</a>
            </li>
        </ul>

    </div>
    </div>
</nav> -->

<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Register</div>
                        <div class="card-body">
                            <form  action="{{route('crud.update',$student_edit->id)}}" method="POST" enctype="multipart/form-data">

                               @csrf
                               @method('PUT')

                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-left">Full Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="full_name" class="form-control" name="name" value="{{$student_edit->name}}">
                                        @error('name')<div class=" alert alert-danger">{{ $message }}</div>@enderror
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-left">E-Mail Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control" name="email" value="{{$student_edit->email}}">
                                        @error('email')<div class=" alert alert-danger">{{ $message }}</div>@enderror
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-left">Phone Number</label>
                                    <div class="col-md-6">
                                        <input type="text" id="phone_number" class="form-control" name="phone" value="{{$student_edit->phone}}">
                                        @error('phone')<div class=" alert alert-danger">{{ $message }}</div>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="present_address" class="col-md-4 col-form-label text-md-left">Gender</label>
                                    <div class="col-sm-6">
                                        <!-- <input type="text" id="present_address" class="form-control"> -->
                                        <select name="gender" id="" class="form-control">
                                            <option value="">-select-</option>
                                            <option value="male" {{($student_edit->gender == 'male') ? 'selected':''}}>Male</option>
                                            <option value="female" {{($student_edit->gender == 'female') ? 'selected':''}}>Female</option>
                                        </select>
                                        @error('gender')<div class=" alert alert-danger">{{ $message }}</div>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="permanent_address" class="col-md-4 form-check-label text-md-left">Languages</label>
                                    <div class="col-sm-2 form-check form-check-inline px-3">
                                        <input type="checkbox" id="permanent_address" class="form-check" name="languages[]" value="tamil" {{in_array('tamil',$student_edit->languages) ? 'checked':''}}>Tamil
                                        <!-- <label class="form-check-label" for="inlineCheckbox1">Tamil</label> -->
                                    </div>
                                    <div class="col-md-2 form-check form-check-inline">
                                        <input type="checkbox" id="permanent_address" class="form-check" name="languages[]" value="english" {{in_array('english',$student_edit->languages) ? 'checked':''}}>English
                                    </div>
                                    <div class="col-md-2 form-check form-check-inline">
                                        <input type="checkbox" id="permanent_address" class="form-check" name="languages[]" value="hindi" {{in_array('hindi',$student_edit->languages) ? 'checked':''}}>Hindi

                                    </div>
                                    @error('languages')<div class=" alert alert-danger">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-group row">
                                    <label for="nid_number" class="col-md-4 col-form-label text-md-left">Image</label>
                                    <div class="col-md-6">
                                        <img src="{{asset($student_edit->image)}}" alt="" width="150px" height=""150px>
                                        <input type="file" id="nid_number" class="form-control" name="image">

                                        @error('image')<div class=" alert alert-danger">{{ $message }}</div>@enderror
                                    </div>
                                </div>

                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                        Update
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
