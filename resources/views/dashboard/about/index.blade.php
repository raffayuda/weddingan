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
                <h1>About Content <img src="img/monitor.gif" alt="" class="img-fluid" width="60"></h1>
                <table class="table table-striped">
                    <tr>
                        <th>img1</th>
                        <th>img2</th>
                        <th>img3</th>
                        <th>img4</th>
                        <th>Content</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($data as $item)    
                    <tr>
                        <td><img src="{{asset('storage/images/'.$item->img1)}}" alt="" width="60px"></td>
                        <td><img src="{{asset('storage/images/'.$item->img2)}}" alt="" width="60px"></td>
                        <td><img src="{{asset('storage/images/'.$item->img3)}}" alt="" width="60px"></td>
                        <td><img src="{{asset('storage/images/'.$item->img4)}}" alt="" width="60px"></td>
                        <td><?= $item->content?></td>
                        <td>
                            <a class="btn btn-info" href="/aboutEdit/{{$item->id}}">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
   </div>
@endsection
@include('dashboard.service.tambah')
