  {{-- button --}}
  <button type="submit" class="btn delete" data-toggle="modal"data-target="#edit{{ $p->id }}">
    <i class="fa fa-edit " style="color: rgb(0, 153, 255)" ></i>
  </button> 

<div class="modal fade" id="edit{{ $p->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Update Paket</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form method="post" action="{{ url('paket/'.$p->id) }}">
        @csrf
        @method('PUT')
        <div id="method"></div>
        <div class="card-body">
          <div class="form-group">
            <label class="mt-2" for="outlet_id">Id Outlet</label>
            <div class="container">
            <input type="text" class="form-control col-sm-9" id="outlet_id"  value="{{ $p->outlet_id }}" name="outlet_id">
            </div>
          </div>
        </div>

        <div class="card-body">
            <div class="form-group">
              <label for="jenis">Jenis</label>
              <div class="container">
              <select type="text" class="form-control col-sm-9" id="jenis" value="{{ $p->jenis }}" name="jenis">
                    <option value="kiloan">kiloan</option>
                    <option value="selimut">selimut</option>
                    <option value="bed_cover">bed_cover</option>
                    <option value="kaos">kaos</option>
              </select>
              </div>
            </div>
          </div>

          <div class="card-body">
            <div class="form-group">
              <label for="nama_paket">Nama Paket</label>
              <div class="container">
              <input type="text" class="form-control col-sm-9" id="nama_paket" value="{{ $p->nama_paket }}" name="nama_paket">
              </div>
            </div>
          </div>

          <div class="card-body">
            <div class="form-group">
              <label for="harga">Harga</label>
              <div class="container">
              <input type="text" class="form-control col-sm-9" id="harga" value="{{ $p->harga }}" name="harga">
              </div>
            </div>
          </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Exit</button>
      <button type="sumbit" class="btn btn-primary" id="btn-sumbit">Update</button>
    </div>
  </div>
</div>
</form>
</div>

