@extends('dashboard.layouts.main')
@section('content')
    <form action="{{route('teamAdmin.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" autocomplete="off" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Masukkan Nama" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Profession</label>
            <input type="text" class="form-control" autocomplete="off" name="job" id="exampleFormControlInput1" placeholder="Masukkan Pekerjaan" required>
        </div>
        <div class="mb-3 col-5">
            <label for="formFileSm" class="form-label">Img</label>
            <input class="form-control form-control-sm" id="formFileSm" type="file" name="img">
        </div>
        <button class="btn btn-primary mt-3" type="submit">Save</button>
    </form>
@endsection
