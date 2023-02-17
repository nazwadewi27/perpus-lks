<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ route('admin.add') }}">
        <div class="modal-body">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Kode</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Kode" required-value='{{ $kode }}' readonly>
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Fullname" required-value='fullname' readonly>
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Username</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Username" required-value='username  ' readonly>
            </div>
        </div>
      </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>