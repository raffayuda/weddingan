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
                <h1>Employees <img src="img/decor.gif" alt="" class="img-fluid" width="60"></h1>
                <a href="#" class="mb-3 btn btn-primary"  data-bs-toggle="modal" data-bs-target="#employee">
                    Add +
                  </a>
                <table class="table table-striped">
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>No HP</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($data as $item)    
                    <tr>
                        <td><?= $loop->iteration ?></td>
                        <td><?= $item->nama?></td>
                        <td><?= $item->jk?></td>
                        <td>0{{$item->nohp}}</td>
                        <td>{{$item->alamat}}</td>
                        <td>
                            <div class="btn-group dropstart">
                                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-cogs"></i>
                                </button>
                                <ul class="dropdown-menu">
                                  <li>
                                      <a class="dropdown-item" href="#"  data-bs-toggle="modal" data-bs-target="#employee{{$item->id}}">Edit</a>
                                  </li>
                                  <li>
                                      <form class="d-inline-block" action="{{route('employee.destroy', $item->id)}}" method="POST">
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
   @include('dashboard.employee.tambah')
   @include('dashboard.employee.edit')
