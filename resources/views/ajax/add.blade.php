
@extends('layout.app')
@section('content')
    <main>
        <section>
            <form id="student" data-action="{{route('ajax.store')}}"  method="POST" enctype="multipart/form-data">
                @csrf
                {{-- @method('POST') --}}
                <div class="container mt-5">
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" name="name" class="form-control name" id="staticEmail" value="">
                          <span class="name_error text-danger"></span>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="text" name="email" class="form-control email" id="staticEmail">
                          <span class="email_error text-danger"></span>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                          <input type="number" name="phone" class="form-control phone" id="inputPassword">
                          <span class="phone_error text-danger"></span>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Gender</label>
                        <div class="col-sm-10">

                          <select name="gender" id="" class="form-control gender">
                                <option value="">-select-</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                          </select>
                          <span class="gender_error text-danger"></span>
                        </div>

                    </div>

                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Languages</label>
                        <div class="col-sm-10">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input languages" name="languages[]" type="checkbox" id="inlineCheckbox1" value="tamil">
                                <label class="form-check-label" for="inlineCheckbox1">Tamil</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input languages" name="languages[]" type="checkbox" id="inlineCheckbox2" value="english">
                                <label class="form-check-label" for="inlineCheckbox2">English</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input languages" name="languages[]" type="checkbox" id="inlineCheckbox3" value="hindi">
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
                          <input type="file" name="image" class="form-control image" id="inputPassword">
                          <span class="image_error text-danger"></span>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        {{-- <label for="staticEmail" class="col-sm-2 col-form-label">Email</label> --}}
                        <div class="col-sm-10">
                          {{-- <input type="email"  class="form-control" id="staticEmail"> --}}
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>

                </div>
            </form>

        </section>
    </main>
@endsection
