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
                <h1>Catering Content <img src="img/cater.gif" alt="" class="img-fluid" width="60"></h1>
                <a href="/cateringAdmin/create" class="mb-3 btn btn-primary">
                    Add +
                  </a>
                <table class="table table-striped">
                    <tr>
                        <th>Title</th>
                        <th>Label</th>
                        <th>Description</th>
                        <th>Img</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($data as $item)    
                    <tr>
                        <td><?= $item->title ?></td>
                        <td><?= $item->label?></td>
                        <td><?= $item->description?></td>
                        <td><img src="{{asset('storage/images/'.$item->img)}}" alt="" width="60"></td>
                        <td>
                            <div class="btn-group dropstart">
                                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-cogs"></i>
                                </button>
                                <ul class="dropdown-menu">
                                  <li>
                                      <a class="dropdown-item" href="/cateringAdmin/{{$item->id}}/edit">Edit</a>
                                  </li>
                                  <li>
                                      <form class="d-inline-block" action="{{route('cateringAdmin.destroy', $item->id)}}" method="POST">
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
                <div class="mt-3">
                    {{$data->links()}}
                </div>
            </div>
        </div>
    </div>
   </div>
@endsection
