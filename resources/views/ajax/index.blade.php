
    @extends('layout.app')

    @section('content')

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
                                <td><img src="{{asset($data->image)}}" alt="" height="150" width="150"></td>
                                <td>
                                    <div class=" d-flex align-items-center">
                                        <div>
                                            <a href="{{route('ajax.edit',$data->id)}}" class="btn btn-primary btn-sm edit">Edit</i></a>
                                            <!-- <a href=""><i class="fa-solid fa-trash"></i></a> -->
                                        </div>
                                        <div class="ms-1 mt-1 pb-1">
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

@endsection

@section('scripts')
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

@endsection

