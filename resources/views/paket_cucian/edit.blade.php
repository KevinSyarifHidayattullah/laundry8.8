<div class="modal fade" id="formInputModal{{ $p->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Mengubah Data Paket</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ route('paket_cucian.update', $p->id) }}">
            @csrf @method('put')
            <div id="method"> </div>
            <div class="card-body">
              <div class="form-group">
                <label for="id_outlet" class="container mt-3">ID OUTLET</label>
                
                <input type="text" class="form-control col-sm-5" id="id_outlet" name="id_outlet" value="{{ auth()->user()->id_outlet }}"
                placeholder="nama-paket" readonly>
              </div>

                    <div class="form-group">
                        <label class="container" for="jenis">Jenis</label>
                        <select class="form-control col-sm-5" id="jenis" name="jenis">
                            <option value="kiloan"> Kiloan</option>
                            <option value="selimut"> Selimut</option>
                            <option value="bed_cover"> Bed Cover</option>
                            <option value="kaos"> Kaos</option>
                            <option value="lainnya">Lainnya</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="container mt-3" for="nama_paket"> Nama Paket</label>
                        <input type="text" class="form-control " value="{{ $p->nama_paket }}" id="nama_paket" placeholder="Nama Paket" name="nama_paket">
                    </div>

                     <div class="form-group">
                        <label for="harga"> Harga</label>
                        <input type="text" class="form-control " value="{{ $p->harga }}" id="harga" placeholder="Harga" name="harga">
                    </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
          <button type="submit" class="btn btn-success" id="btn-submit">Update</button>
        </div>
      </div>
    </div>
</form>
  </div>
