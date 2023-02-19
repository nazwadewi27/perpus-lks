@foreach ( $kategori as $k )
    <!-- Modal -->
    <div class="modal fade" id="kategoriDelete{{ $k->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <form action="{{ url('admin/kategori/delete', $k->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    <center class="mt-3">
                        <p> 
                            Apakah Anda yakin ingin menghapus data ini?
                        </p>
                    </center>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                    <button type="submit" class="btn btn-primary">Hapus</button>
                </div>
            </form>
          </div>
        </div>
      </div>
  
  
@endforeach