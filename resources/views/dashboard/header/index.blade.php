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
                <h1>Header Content <img src="img/monitor.gif" alt="" class="img-fluid" width="60"></h1>
                <div style="border: 2px solid black; border-radius: 10px;" class="p-4">
                    @foreach ($data as $item)
                        <?= $item->content?>
                        <a href="/headerEdit/{{$item->id}}" class="d-block col-lg-1 mt-4 btn btn-warning">Edit</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
   </div>
@endsection