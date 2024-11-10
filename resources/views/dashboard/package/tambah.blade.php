@extends('dashboard.layouts.main')
@section('content')
    <form action="{{route('packageAdmin.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input type="text" autocomplete="off" class="form-control" name="title" id="exampleFormControlInput1" placeholder="Masukkan Title" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Label</label>
            <input type="text" autocomplete="off" class="form-control" name="label" id="exampleFormControlInput1" placeholder="Masukkan Label" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Price</label>
            <input type="number" autocomplete="off" class="form-control" name="harga" id="exampleFormControlInput1" placeholder="Masukkan Harga" required>
        </div>
        <div class="mb-3 col-5">
            <label for="formFileSm" class="form-label">Img</label>
            <input class="form-control form-control-sm" id="formFileSm" type="file" name="img">
        </div>
        <textarea name="description" id="editor" cols="30" rows="10"></textarea>
        <button class="btn btn-primary mt-3" type="submit">Simpan</button>
    </form>
@endsection
