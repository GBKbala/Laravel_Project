<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>
<body>

    <div class="container">
        <div class="row mt-3">
            <div class="col-sm-3">
                <a href="{{route('ajax.create')}}" class="btn btn-primary">Click Here To Add</a>
            </div>

        </div>
    </div>
        <div>
            {{-- @if($messege = Session::get('success'))
                <div class="alert alert-success">{{$messege}}</div>
            @endif --}}
        </div>
        <div class="container">
            <div class="row mt-4">
                <table class="table table-bordered table-sm">
                    <thead>
                        <tr>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Phone</td>
                            <td>Gender</td>
                            <td>Languages</td>
                            <td>Image</td>
                            <td>Actions</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ajax_data as $data)
                            <tr>
                                <td>{{$data->name}}</td>
                                <td>{{$data->email}}</td>
                                <td>{{$data->phone}}</td>
                                <td>{{$data->gender}}</td>
                                <td>{{$data->languages}}</td>
                                <td><img src="{{asset('assets/'.$data->image)}}" alt="" height="150" width="150"></td>
                                <td>
                                    <div class=" d-flex align-items-center">
                                        <div>
                                            <a href="{{route('ajax.edit',$data->id)}}" class="btn btn-primary btn-sm edit">Edit</i></a>
                                            <!-- <a href=""><i class="fa-solid fa-trash"></i></a> -->
                                        </div>
                                        <div class="ms-1">
                                            <form action="{{route('ajax.destroy',$data->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                            <button type="submit" class="btn btn-primary btn-sm">Delete</button>
                                            </form>
                                        </div>

                                    </div>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>


                </table>
            </div>
        </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>

    <script>
        $(document).ready(function(){
            @if(Session::has('success'))
                //     Toastify({ text: "jii", duration: 3000,
                //     style: { background: "linear-gradient(to right, #00b09b, #96c93d)" }
                // }).showToast();
                toastr.success("{{ Session::get('success') }}");
            @endif
        });
    </script>

</body>
</html>
