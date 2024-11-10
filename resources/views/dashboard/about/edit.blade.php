@extends('dashboard.layouts.main')
@section('content')
    <form action="/aboutUpdate/{{$data->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 col-5">
            <label for="formFileSm" class="form-label">Img 1</label>
            <input class="form-control form-control-sm" id="formFileSm" type="file" name="img1" required>
        </div>
        <div class="mb-3 col-5">
            <label for="formFileSm" class="form-label">Img 2</label>
            <input class="form-control form-control-sm" id="formFileSm" type="file" name="img2" required>
        </div>
        <div class="mb-3 col-5">
            <label for="formFileSm" class="form-label">Img 3</label>
            <input class="form-control form-control-sm" id="formFileSm" type="file" name="img3" required>
        </div>
        <div class="mb-3 col-5">
            <label for="formFileSm" class="form-label">Img 4</label>
            <input class="form-control form-control-sm" id="formFileSm" type="file" name="img4" required>
        </div>
        <textarea name="content" id="editor" cols="30" rows="10" required autocomplete="off"><?= $data->content?></textarea>
        <button class="btn btn-primary mt-3" type="submit">Simpan</button>
    </form>
@endsection