
@extends('layout.app')
@section('content')
    <main>
        <section>
            <form id="student_edit" data-action="{{route('ajax.update',$ajax_edit->id)}}"  method="" enctype="multipart/form-data">
                @csrf
                {{-- @method('PUT') --}}
                <div class="container mt-5">
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" name="name" value="{{$ajax_edit->name}}" class="form-control name" id="staticEmail" >
                          <span class="name_error text-danger"></span>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="text" value="{{$ajax_edit->email}}" name="email" class="form-control email" id="staticEmail">
                          <span class="email_error text-danger"></span>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                          <input type="number" value="{{$ajax_edit->phone}}" name="phone" class="form-control phone" id="inputPassword">
                          <span class="phone_error text-danger"></span>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Gender</label>
                        <div class="col-sm-10">

                          <select name="gender" id="" class="form-control gender">
                                <option value="">-select-</option>
                                <option value="male" {{($ajax_edit->gender == 'male') ? 'selected':''}}>Male</option>
                                <option value="female" {{($ajax_edit->gender == 'female') ? 'selected':''}}>Female</option>
                          </select>
                          <span class="gender_error text-danger"></span>
                        </div>

                    </div>

                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Languages</label>
                        <div class="col-sm-10">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input languages" name="languages" type="checkbox" id="inlineCheckbox1" value="tamil" {{in_array('tamil',$ajax_edit->languages) ? 'checked':''}}>
                                <input type="hidden" name="" id="id" value="{{$ajax_edit->id}}">
                                <label class="form-check-label" for="inlineCheckbox1">Tamil</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input languages" name="languages" type="checkbox" id="inlineCheckbox2" value="english" {{in_array('english',$ajax_edit->languages) ? 'checked':''}}>
                                <label class="form-check-label" for="inlineCheckbox2">English</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input languages" name="languages" type="checkbox" id="inlineCheckbox3" value="hindi" {{in_array('hindi',$ajax_edit->languages) ? 'checked':''}}>
                                <label class="form-check-label" for="inlineCheckbox3">Hindi</label>
                              </div>
                              <div>
                                <span class="language_error text-danger"></span>
                              </div>

                        </div>
                    </div>



                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <img src="{{asset($ajax_edit->image)}}" alt="" width="100" height="100">
                          <input type="file" name="image" class="form-control image" id="edit_image">
                          <span class="image_error text-danger"></span>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        {{-- <label for="staticEmail" class="col-sm-2 col-form-label">Email</label> --}}
                        <div class="col-sm-10">
                          {{-- <input type="email"  class="form-control" id="staticEmail"> --}}
                          <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>

                </div>
            </form>

        </section>
    </main>
@endsection

