<div class="modal fade" id="formInputModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Menambah Paket Baru</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="paket_cucian">
            @csrf
            <div id="method"> </div>
            <div class="card-body">
                    <div class="form-group">
                      <label for="id_outlet" class="container mt-3">ID OUTLET</label>
                      <input type="text" class="form-control col-sm-5" id="id_outlet" name="id_outlet" value="{{ auth()->user()->id_outlet }}"
                      placeholder="nama-paket" readonly>
                    </div>

                    
                    <div class="form-group">
                        <label for="jenis" class="container mt-3">Jenis</label>
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
                        <input type="text" class="form-control col-sm-10" id="nama_paket" placeholder="" name="nama_paket">
                    </div>

                    <div class="form-group">
                        <label for="harga" class="container mt-3"> Harga</label>
                        <input type="number" class="form-control col-sm-10" id="tlp" placeholder="" name="harga">
                    </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn btn-secondary" data-dismiss="modal">Kembali</button>
          <button type="submit" class="btn btn btn-success" id="btn-submit">Tambah</button>
        </div>
      </div>
    </div>
</form>
  </div>


  <div class="modal fade" id="formImport" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> Import Data Paket</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{ url(request()->segment(1).'/paket_cucian/import') }}" enctype="multopart/form-data">
            @csrf
              <div class="card-body">
                <div class="form-grup">
                  <label for="jenis">file excel</label>
                  <input type="file" name="import" id="import">
                </div>
              </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Upload</button>
        </div>
      </div>
    </div>
  </form>
  </div>
