<div class="modal fade" id="formInputModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="member">
            @csrf
            <div id="method"></div>
            <div class="card-body">
              <div class="form-group">
                <label for="nama">Nama</label>
                <div class="container">
                <input type="text" class="form-control col-sm-9" id="nama" placeholder="" name="nama">
                </div>
              </div>
            </div>
  
            <div class="card-body">
                <div class="form-group">
                  <label class="mt-2" for="alamat">Alamat</label>
                  <div class="container">
                  <input type="text" class="form-control col-sm-9" id="alamat" placeholder="" name="alamat">
                  </div>
                </div>
              </div>

              <div class="card-body">
                <div class="form-group">
                  <label class="mt-2" for="jenis_kelamin">Jenis kelamin</label>
                  <div class="container">
                  <select class="form-control col-sm-5" id="jenis_kelamin" name="jenis_kelamin" aria-placeholder="Jenis kelamin">
                    <option value="L">L</option>
                    <option value="P">P</option>
                </select>
                  </div>
                </div>
              </div>
  
              <div class="card-body">
                <div class="form-group">
                  <label class="mt-2" for="tlp">No Telp</label>
                  <div class="container">
                  <input type="text" class="form-control col-sm-9" id="tlp" placeholder="" name="tlp">
                  </div>
                </div>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
          <button type="sumbit" class="btn btn-warning" id="btn-sumbit">Tambah</button>
        </div>
      </div>
    </div>
  </form>
  </div>

