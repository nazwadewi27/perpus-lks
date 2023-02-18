<!-- Modal -->
<div class="modal fade" id="buku" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Tambah Buku</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('buku.add') }}"method="POST" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 mb-3">
                    <label for="formGroupExampleInput" class="form-label">Judul Buku</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Judul Buku" name="judul" required>               
                </div>
                <div class="col-12 col-md-12 col-lg-12 mb-3">
                    <label for="formGroupExampleInput" class="form-label">Pengarang</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Pengarang" name="pengarang" required>               
                </div>
                <div class="col-12 col-md-6 col-lg-6 mb-3">
                    <label for="formGroupExampleInput" class="form-label">Kategori</label>
                    <select class="form-select" name="kategori_id">
                        <option>Pilih Kategori</option>
                        @foreach ($kategori as $k)
                            <option value="{{ $k->id }}">{{ $k->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12 col-md-6 col-lg-6 mb-3">
                    <label for="formGroupExampleInput" class="form-label">Penerbit</label>
                    <select class="form-select" name="penerbit_id">
                        <option>Pilih Kategori</option>
                        @foreach ($penerbit as $p)
                            <option value="{{ $p->id }}">{{ $p->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12 col-md-6 col-lg-6 mb-3">
                    <label for="formGroupExampleInput" class="form-label">ISBN</label>
                    <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Nomor ISBN" name="isbn" required>               
                </div>
                <div class="col-12 col-md-6 col-lg-6 mb-3">
                    <label for="formGroupExampleInput" class="form-label">Tahun Terbit</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Tahun Terbit" name="tahun_terbit" required>               
                </div>
                <div class="col-12 col-md-6 col-lg-6 mb-3">
                    <label for="formGroupExampleInput" class="form-label">Jumlah Buku Baik</label>
                    <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Jumlah Buku Baik" name="j_buku_baik" required>               
                </div>
                <div class="col-12 col-md-6 col-lg-6 mb-3">
                    <label for="formGroupExampleInput" class="form-label">Jumlah Buku Rusak</label>
                    <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Jumlah Buku Baik" name="j_buku_rusak" required>               
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
          </div>
        </form>
        
      </div>
    </div>
  </div>