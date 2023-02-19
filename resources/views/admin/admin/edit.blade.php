@foreach ($admin as $adm)
    <!-- Modal -->
<div class="modal fade" id="adminUpdate{{ $adm->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Edit Administrator</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('admin.update', $adm->id) }}"method="POST" enctype="multipart/form-data">
          @csrf
          @method('put')
          <div class="modal-body">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6 mb-3">
                <label for="formGroupExampleInput" class="form-label">Fullname</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Fullname" name="fullname" value="{{ $adm->fullname }}" required>               
              </div>
              <div class="col-12 col-md-6 col-lg-6 mb-3">
                <label for="formGroupExampleInput" class="form-label">Username</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Username" name="username" value="{{ $adm->username }}" required>               
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
          </div>
        </form>
        
      </div>
    </div>
  </div>
@endforeach
