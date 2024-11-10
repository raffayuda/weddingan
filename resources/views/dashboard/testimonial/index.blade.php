@extends('dashboard.layouts.main')
@section('content')
   <div class="row">
    <div class="col">
        <div class="card" style="background: #ddd">
            <div class="card-body">
                @if ($message = Session::get('success'))
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    {{$message}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif
                <h1>Comments <img src="img/coment.gif" alt="" class="img-fluid" width="60"></h1>
            
                <table class="table table-striped">
                    <tr>
                        <th>Name</th>
                        <th>Profession</th>
                        <th>Img</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($data as $index => $item)    
                    <tr>
                        
                        <td><?= $item->name?></td>
                        <td><?= $item->profesi?></td>
                        <td><img src="{{asset('storage/images/'.$item->img)}}" alt="" style="width: 70px;height: 70px; border:2px solid #530a8e" class="rounded-circle"></td>
                        <td>
                            <a class="btn btn-info" href="#" data-bs-toggle="modal" data-bs-target="#showTesti{{$item->id}}">Show</a>
                            <form class="d-inline-block" action="{{route('testiAdmin.destroy', $item->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
                <div class="mt-3">{{$data->links()}}</div>
            </div>
        </div>
    </div>
   </div>
@endsection
@include('dashboard.testimonial.show')