<!-- Modal -->
<div class="modal fade" id="admin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tambah Administrator</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ route('admin.add') }}"method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-12 mb-3">
              <label for="formGroupExampleInput" class="form-label">kode</label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="kode" required value="{{ $kode }}" readonly>               
            </div>
            <div class="col-12 col-md-6 col-lg-6 mb-3">
              <label for="formGroupExampleInput" class="form-label">Fullname</label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Fullname" name="fullname" required>               
            </div>
            <div class="col-12 col-md-6 col-lg-6 mb-3">
              <label for="formGroupExampleInput" class="form-label">Username</label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Username" name="username" required>               
            </div>
            <div class="col-12 col-md-12 col-lg-12 mb-3">
              <label for="formGroupExampleInput" class="form-label">Password</label>
              <input type="password" class="form-control" id="formGroupExampleInput" placeholder="Password" name="password" required>               
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
        </div>
      </form>
      
    </div>
  </div>
</div>