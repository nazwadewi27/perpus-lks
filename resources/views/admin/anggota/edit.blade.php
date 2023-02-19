@foreach ($anggota as $ang)
    <!-- Modal -->
<div class="modal fade" id="anggotaUpdate{{ $ang->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Edit Administrator</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('anggota.update', $ang->id) }}"method="POST" enctype="multipart/form-data">
          @csrf
          @method('put')
          <div class="modal-body">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6 mb-3">
                <label for="formGroupExampleInput" class="form-label">Fullname</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Fullname" name="fullname" value="{{ $ang->fullname }}" required>               
              </div>
              <div class="col-12 col-md-6 col-lg-6 mb-3">
                <label for="formGroupExampleInput" class="form-label">Username</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Username" name="username" value="{{ $ang->username }}" required>               
              </div>
              <div class="col-12 col-md-6 col-lg-6 mb-3">
                <label for="formGroupExampleInput" class="form-label">NIS</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="NIS" name="nis" value="{{ $ang->nis }}" required>               
              </div>
              <div class="col-12 col-md-6 col-lg-6 mb-3">
                <label for="formGroupExampleInput" class="form-label">Kelas</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Kelas" name="kelas" value="{{ $ang->kelas }}" required>               
              </div>
              <div class="mb-3">
                  <label for="formGroupExampleInput" class="form-label">Alamat</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Alamat" name="alamat" value="{{ $ang->alamat }}" required>               
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Verifikasi</label>
                <select name="verif_id"  class="form-select" type="hidden">
                    <option value="" disabled selected>-- pilih opsion</option>
                    <option value="verified">verified</option>
                    <option value="unverified">unverified</option>
                </select>               
            </div>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
          </div>
        </form>
        
      </div>
    </div>
  </div>
@endforeach
