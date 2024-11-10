@foreach ($data as $item)    
<div class="modal fade" id="showReservation{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Reservation</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col">Name : {{$item->nama}}</div>
            <div class="col">Email : {{$item->email}}</div>
          </div>
          <div class="row">
            <div class="col">Package : {{$item->paket}}</div>
            <div class="col">Date : {{$item->tanggal}}</div>
          </div>
          <div class="row mt-3">
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Other Question</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" readonly>{{$item->deskripsi}}</textarea>
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