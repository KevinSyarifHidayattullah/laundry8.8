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
          <form method="POST" action="paket">
            @csrf
            <div id="method"></div>
            <div class="card-body">
              <div class="form-group">
                <label class="mt-2" for="outlet_id">Id Outlet</label>
                <div class="container">
                <select  class="form-control col-sm-9" id="outlet_id" placeholder="" name="outlet_id">
                @foreach ($outlet as $o)
                   <option value="{{ $o->id }}"><td>{{ $o->nama }}</td></option>
                @endforeach
                </select>
                </div>
              </div>
            </div>
  
            <div class="card-body">
                <div class="form-group">
                  <label class="mt-2" for="jenis">Jenis</label>
                  <div class="container">
                  <select class="form-control col-sm-5" id="jenis" name="jenis">
                    <option value="kiloan">Kiloan</option>
                    <option value="selimut">Selimut</option>
                    <option value="bed_cover">Bed_cover</option>
                    <option value="kaos">Kaos</option>
                </select>
                  </div>
                </div>
              </div>
  
              <div class="card-body">
                <div class="form-group">
                  <label class="mt-2" for="nama_paket">Nama Paket</label>
                  <div class="container">
                  <input type="text" class="form-control col-sm-9" id="nama_paket" placeholder="" name="nama_paket">
                  </div>
                </div>
              </div>

              <div class="card-body">
                <div class="form-group">
                  <label class="mt-2" for="harga">Harga</label>
                  <div class="container">
                  <input type="text" class="form-control col-sm-9" id="harga" placeholder="" name="harga">
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
  
  