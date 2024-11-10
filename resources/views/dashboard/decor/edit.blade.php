@extends('dashboard.layouts.main')
@section('content')
    <form action="{{route('decorAdmin.update', $data->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="exampleFormControlInput1" autocomplete="off" placeholder="Masukkan Title" value="{{$data->title}}" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Label</label>
            <input type="text" class="form-control" name="label" id="exampleFormControlInput1" autocomplete="off" placeholder="Masukkan Label" value="{{$data->label}}" required>
        </div>
        
        <div class="mb-3 col-5">
            <label for="formFileSm" class="form-label">Img</label>
            <input class="form-control form-control-sm" id="formFileSm" type="file" name="img">
            <img src="{{asset('storage/images/'.$data->img)}}" alt="" width="50" class="mt-2">
        </div>
        <textarea name="description" autocomplete="off" id="editor" cols="30" rows="10" required>{{$data->description}}</textarea>
        <button class="btn btn-primary mt-3" type="submit">Simpan</button>
    </form>
@endsection
