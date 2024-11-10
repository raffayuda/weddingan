
     
<div class="modal fade" id="employee" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Pegawai</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{route('employee.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" autocomplete="off" id="exampleFormControlInput1" placeholder="Masukkan Nama" required>
            </div>
            <div class="mb-3">
                <select class="form-select" aria-label="Default select example" name="jk">
                    <option selected>Jenis Kelamin</option>
                    <option value="1">Laki-Laki</option>
                    <option value="2">Perempuan</option>
                  </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">No HP</label>
                <input type="number" autocomplete="off" class="form-control" name="nohp" id="exampleFormControlInput1" placeholder="Masukkan No HP" required>
            </div>
            <div class="form-floating">
                <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat" id="floatingTextarea2" style="height: 100px"></textarea>
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
