
@extends('dashboard.layouts.main')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1>Header Content</h1>
                    <div style="border: 2px solid black; border-radius: 10px;" class="p-4">
                        <form action="/headerUpdate/{{ $data->id }}" method="POST">
                        @csrf
                            <textarea autocomplete="off" name="content" id="editor" cols="30" rows="10" required>{{$data->content}}</textarea>
                            <button type="submit" class="btn btn-warning mt-3">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection