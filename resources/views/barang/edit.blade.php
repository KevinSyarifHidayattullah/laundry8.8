  {{-- button --}}
  <button type="submit" class="btn btn-outline-success" data-toggle="modal"data-target="#edit{{ $o->id }}">
    <i class="fa fa-edit"  ></i>
  </button> 

<div class="modal fade" id="edit{{ $o->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Update Barang</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form method="post" action="/{{ request()->segment(1)}}/barang/{{ $o->id }}">
        @csrf
        @method('PUT')
        <div id="method"></div>
        <div class="card-body">
          <div class="form-group">
            <label for="nama_barang">nama_barang</label>
            <div class="container">
            <input type="text" class="form-control col-sm-9" id="nama_barang"  value="{{ $o->nama_barang }}" name="nama_barang">
            </div>
          </div>
        </div>

        <div class="card-body">
            <div class="form-group">
              <label for="merk_barang">merk_barang</label>
              <div class="container">
              <input type="text" class="form-control col-sm-9" id="merk_barang" value="{{ $o->merk_barang }}" name="merk_barang">
              </div>
            </div>
          </div>

          <div class="card-body">
            <div class="form-group">
              <label for="qty">qty</label>
              <div class="container">
              <input type="text" class="form-control col-sm-9" id="qty" value="{{ $o->qty }}" name="qty">
              </div>
            </div>
          </div>

          <div class="card-body">
            <div class="form-group">
              <label for="kondisi">kondisi</label>
              <div class="container">
              <select type="text" class="form-control col-sm-9" id="kondisi" value="{{ $o->kondisi }}" name="kondisi">
                <option value="layak_pakai">layak_pakai</option>
                <option value="rusak_ringan">rusak_ringan</option>
                <option value="rusak_besar">rusak_besar</option>
              </select>
              </div>
            </div>
          </div>

          <div class="card-body">
            <div class="form-group">
              <label for="tanggal_pengadaan">tanggal_pengadaan</label>
              <div class="container">
              <input type="text" class="form-control col-sm-9" id="tanggal_pengadaan" value="{{ $o->tanggal_pengadaan }}" name="tanggal_pengadaan">
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

