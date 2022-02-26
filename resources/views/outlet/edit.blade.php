  {{-- button --}}
  <button type="submit" class="btn btn-outline-success" data-toggle="modal"data-target="#edit{{ $o->id }}">
    <i class="fa fa-edit"  ></i>
  </button> 

<div class="modal fade" id="edit{{ $o->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Update Outlet</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form method="post" action="/{{ request()->segment(1)}}/outlet/{{ $o->id }}">
        @csrf
        @method('PUT')
        <div id="method"></div>
        <div class="card-body">
          <div class="form-group">
            <label for="nama">Nama</label>
            <div class="container">
            <input type="text" class="form-control col-sm-9" id="nama"  value="{{ $o->nama }}" name="nama">
            </div>
          </div>
        </div>

        <div class="card-body">
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <div class="container">
              <input type="text" class="form-control col-sm-9" id="alamat" value="{{ $o->alamat }}" name="alamat">
              </div>
            </div>
          </div>

          <div class="card-body">
            <div class="form-group">
              <label for="tlp">No Telp</label>
              <div class="container">
              <input type="text" class="form-control col-sm-9" id="tlp" value="{{ $o->tlp }}" name="tlp">
              </div>
            </div>
          </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
      <button type="sumbit" class="btn btn-success" id="btn-sumbit">Update</button>
    </div>
  </div>
</div>
</form>
</div>

