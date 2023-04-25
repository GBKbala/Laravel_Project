<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <div>
            <a href="{{route('crud.create')}}" class="btn btn-primary">Click Here To Add</a>
        </div>

        <div>
       @if($messege = Session::get('success'))
            <div class="alert alert-success">{{$messege}}</div>
       @endif
        </div>
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
                @foreach($students as $student)
                    <tr>
                        <td>{{$student->name}}</td>
                        <td>{{$student->email}}</td>
                        <td>{{$student->phone}}</td>
                        <td>{{$student->gender}}</td>
                        <td>{{$student->languages}}</td>
                        <td><img src="{{asset($student->image)}}" alt="" height="150" width="150"></td>
                        <td>
                            <div class=" d-flex align-items-center"> 
                                <div>
                                    <a href="{{route('crud.edit',$student->id)}}" class="btn btn-primary btn-sm">Edit</i></a>
                                    <!-- <a href=""><i class="fa-solid fa-trash"></i></a> -->
                                </div>
                                <div class="ms-1">
                                    <form action="{{route('crud.destroy',$student->id)}}" method="POST">
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






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="{{asset('js/script.js')}}"></script>

</body>
</html>