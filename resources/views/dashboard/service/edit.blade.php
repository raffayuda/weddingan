@extends('dashboard.layouts.main')
@section('content')
    <form action="{{route('serviceAdmin.update', $data->id)}}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Icon Service</label>
            <input type="text" autocomplete="off" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Icon" value="{{$data->icon}}" required>
        </div>
        <textarea name="content" autocomplete="off" id="editor" cols="30" rows="10" required><?= $data->content?></textarea>
        <button class="btn btn-primary mt-3" type="submit">Simpan</button>
    </form>
@endsection