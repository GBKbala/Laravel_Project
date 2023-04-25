<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>
    <main>
        <section>
            <form id="student"  method="" enctype="multipart/form-data">
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
                                <input class="form-check-input languages" name="languages" type="checkbox" id="inlineCheckbox1" value="tamil">
                                <label class="form-check-label" for="inlineCheckbox1">Tamil</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input languages" name="languages" type="checkbox" id="inlineCheckbox2" value="english">
                                <label class="form-check-label" for="inlineCheckbox2">English</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input languages" name="languages" type="checkbox" id="inlineCheckbox3" value="hindi">
                                <label class="form-check-label" for="inlineCheckbox3">Hindi</label>
                              </div>
                              <span class="language_error text-danger"></span>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="{{asset('js/script.js')}}"></script>
</body>
</html>
