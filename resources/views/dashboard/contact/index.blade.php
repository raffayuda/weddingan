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
                <h1>Contacts <img src="img/telepon.gif" alt="" class="img-fluid" width="60"></h1>
                <table class="table table-striped">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($data as $item)    
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td><?= $item->nama ?></td>
                        <td><?= $item->email?></td>
                        <td><?= $item->subjek?></td>
                        <td>
                            <a class="btn btn-info" href="#" data-bs-toggle="modal" data-bs-target="#showContact{{$item->id}}">Show</a>
                            <form class="d-inline-block" action="{{route('contactAdmin.destroy', $item->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
   </div>
@endsection
@include('dashboard.contact.show')
