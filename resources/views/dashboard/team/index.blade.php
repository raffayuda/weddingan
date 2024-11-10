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
                <h1>Team Content <img src="img/team.gif" alt="" class="img-fluid" width="60"></h1>
                <a href="/teamAdmin/create" class="mb-3 btn btn-primary">
                    Add +
                  </a>
                <table class="table table-striped">
                    <tr>
                        <th>#</th>
                        <th>Img</th>
                        <th>Name</th>
                        <th>Profession</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($data as $item)    
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td><img src="{{asset('storage/images/'.$item->img)}}" alt="" width="60"></td>
                        <td><?= $item->name?></td>
                        <td><?= $item->job?></td>
                        <td>
                            <div class="btn-group dropstart">
                                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-cogs"></i>
                                </button>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="/teamAdmin/{{$item->id}}/edit">Edit</a></li>
                                  <li>
                                      <form class="d-inline-block" action="{{route('teamAdmin.destroy', $item->id)}}" method="POST">
                                          @csrf
                                          @method('delete')
                                          <button class="dropdown-item">Delete</button>
                                      </form>
                                  </li>
                                </ul>
                              </div>
                            
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
   </div>
@endsection
