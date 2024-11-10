@extends('dashboard.layouts.main')
@section('content')
    <form action="{{route('teamAdmin.update', $data->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" class="form-control" autocomplete="off" name="name" id="exampleFormControlInput1" placeholder="Masukkan Nama" value="{{$data->name}}" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Profession</label>
            <input type="text" class="form-control" autocomplete="off" name="job" id="exampleFormControlInput1" placeholder="Masukkan Pekerjaan" value="{{$data->job}}" required>
        </div>
        <div class="mb-3 col-5">
            <label for="formFileSm" class="form-label">Img</label>
            <input class="form-control form-control-sm" id="formFileSm" type="file" name="img">
            <img src="{{asset('storage/images/'.$data->img)}}" alt="" width="50" class="mt-2">
        </div>
        <button class="btn btn-primary mt-3" type="submit">Save</button>
    </form>
@endsection