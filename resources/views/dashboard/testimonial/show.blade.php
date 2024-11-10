@foreach ($data as $item)    
<div class="modal fade" id="showTesti{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Comment</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col">
                  <img src="{{asset('storage/images/'.$item->img)}}" alt="" style="width: 130px;height: 130px; border:2px solid #530a8e" class="rounded-circle img-fluid mb-3">
            </div>
              <div class="col">
                <span>Name : {{$item->name}}</span><br>
                <span>Email : {{$item->email}}</span><br>
                <span>profession : {{$item->profesi}}</span><br>
                <span>Date : {{$item->created_at}}</span>
              </div>
          
          </div>
          <div class="row mt-3">
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Comment</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" readonly>{{$item->comment}}</textarea>
                  </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@endforeach