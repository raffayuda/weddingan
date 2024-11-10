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
                <h1>Service Content <img src="img/service.gif" alt="" class="img-fluid" width="60"></h1>
                <button type="button" class="mb-3 btn btn-primary" data-bs-toggle="modal" data-bs-target="#createService">
                    Add +
                  </button>
                <table class="table table-striped">
                    <tr>
                        <th>Icon Service</th>
                        <th>Content</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($data as $item)    
                    <tr>
                        <td>{{$item->icon}}</td>
                        <td><?= $item->content?></td>
                        <td>
                            <div class="btn-group dropstart">
                                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-cogs"></i>
                                </button>
                                <ul class="dropdown-menu">
                                  <li><a class=" dropdown-item" href="/serviceAdmin/{{$item->id}}/edit">Edit</a></li>
                                  <li>
                                      <form class="d-inline-block" action="{{route('serviceAdmin.destroy', $item->id)}}" method="POST">
                                          @csrf
                                          @method('delete')
                                          <button class="btn">Delete</button>
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
@include('dashboard.service.tambah')
