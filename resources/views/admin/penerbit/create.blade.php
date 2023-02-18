<!-- Modal -->
<div class="modal fade" id="penerbit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Tambah Penerbit</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('penerbit.add') }}"method="POST" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 mb-3">
                    <label for="formGroupExampleInput" class="form-label">Kode</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Kode" name="kode" required value="{{ $kode }}" readonly>               
                </div>
                <div class="col-12 col-md-12 col-lg-12 mb-3">
                    <label for="formGroupExampleInput" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama" name="nama" required>               
                </div>
                <div class="col-12 col-md-6 col-lg-6 mb-3">
                    <label for="formGroupExampleInput" class="form-label">Verifikasi</label>
                    <select class="form-select" name="penerbit">
                        <option>Pilih Verifikasi</option>
                        <option value="verified">Verified</option>
                        <option value="unverified">Unverified</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
          </div>
        </form>
        
      </div>
    </div>
  </div>