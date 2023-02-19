<!-- Modal -->
<div class="modal fade" id="anggota" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Tambah Anggota</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('anggota.add') }}"method="POST" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
            <div class="row">
                  <div class="col-12 col-md-12 col-lg-12 mb-3">
                    <label for="formGroupExampleInput" class="form-label">Kode</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="kode" required value="{{ $kode }}" readonly>               
                  </div>
                  <div class="col-12 col-md-6 col-lg-6 mb-3">
                    <label for="formGroupExampleInput" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Fullname" name="fullname" required>               
                  </div>
                  <div class="col-12 col-md-6 col-lg-6 mb-3">
                    <label for="formGroupExampleInput" class="form-label">Nama Pengguna</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Username" name="username" required>               
                  </div>
                  <div class="col-12 col-md-12 col-lg-12 mb-3">
                    <label for="formGroupExampleInput" class="form-label">Password</label>
                    <input type="password" class="form-control" id="formGroupExampleInput" placeholder="Password" name="password" required>               
                  </div>
                  <div class="col-12 col-md-6 col-lg-6 mb-3">
                    <label for="formGroupExampleInput" class="form-label">NIS</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="NIS" name="nis" required>               
                  </div>
                  <div class="col-12 col-md-6 col-lg-6 mb-3">
                    <label for="formGroupExampleInput" class="form-label">Kelas</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Kelas" name="kelas" required>               
                  </div>
                  <div class="mb-3">
                      <label for="formGroupExampleInput" class="form-label">Alamat</label>
                      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Alamat" name="alamat" required>               
                  </div>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
          </div>
        </form>
        
      </div>
    </div>
  </div>