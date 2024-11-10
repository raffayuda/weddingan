   
<div class="modal fade" id="userCreate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Create Admin</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{route('usersAdmin.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" autocomplete="off" id="exampleFormControlInput1" placeholder="Enter Name" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" autocomplete="off" class="form-control" name="email" id="exampleFormControlInput1" placeholder="Enter Email" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="exampleFormControlInput1" placeholder="Enter Password" required>
            </div>
            <div class="mb-3">
                <label for="formFileSm" class="form-label">Foto User</label>
                <input class="form-control form-control-sm" id="formFileSm" type="file" name="image">
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
