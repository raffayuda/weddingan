@extends('dashboard.layouts.main')
@section('content')
    <form action="{{route('packageAdmin.update', $data->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input type="text" autocomplete="off" class="form-control" name="title" id="exampleFormControlInput1" placeholder="Masukkan Title" value="{{$data->title}}" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Label</label>
            <input type="text" autocomplete="off" class="form-control" name="label" id="exampleFormControlInput1" placeholder="Masukkan Label" value="{{$data->label}}" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Price</label>
            <input type="number" class="form-control" autocomplete="off" name="harga" id="exampleFormControlInput1" placeholder="Masukkan Harga" value="{{$data->harga}}" required>
        </div>
        <div class="mb-3 col-5">
            <label for="formFileSm" class="form-label">Img</label>
            <input class="form-control form-control-sm" id="formFileSm" type="file" name="img">
            <img src="{{asset('storage/images/'.$data->img)}}" alt="" width="50" class="mt-2">
        </div>
        <textarea name="description" id="editor" cols="30" rows="10" required>{{$data->description}}</textarea>
        <button class="btn btn-primary mt-3" type="submit">Simpan</button>
    </form>
@endsection