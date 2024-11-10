@foreach ($data as $item)    
<div class="modal fade" id="employee{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Edit User</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{route('employee.update', $item->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" autocomplete="off" id="exampleFormControlInput1" placeholder="Masukkan Nama" required value="{{$item->nama}}">
            </div>
            <div class="mb-3">
                <select class="form-select" aria-label="Default select example" name="jk">
                    <option selected>{{$item->jk}}</option>
                    <option value="1">Laki-Laki</option>
                    <option value="2">Perempuan</option>
                  </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">No HP</label>
                <input type="number" autocomplete="off" class="form-control" name="nohp" id="exampleFormControlInput1" placeholder="Masukkan No HP" required value="{{$item->nohp}}">
            </div>
            <div class="form-floating">
                <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat" id="floatingTextarea2" style="height: 100px">{{$item->alamat}}</textarea>
                <label for="floatingTextarea2">Alamat</label>
            </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
        </form>
        </div>
      </div>
    </div>
  </div>
@endforeach
