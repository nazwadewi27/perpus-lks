@foreach ($kategori as $k)
    <!-- Modal -->
<div class="modal fade" id="kategoriUpdate{{ $k->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Edit Kategori</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('kategori.update', $k->id) }}"method="POST" enctype="multipart/form-data">
          @csrf
          @method('put')
          <div class="modal-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 mb-3">
                    <label for="formGroupExampleInput" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama" name="nama" value="{{ $k->nama }}" required>               
                </div>  
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
          </div>
        </form>
      </div>
    </div>
</div>
@endforeach
