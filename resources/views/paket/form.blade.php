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
            <div class="modal-body">
              <form method="POST" action="outlet">
                @csrf
                <div id="method"></div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="id_outlet">id_outlet</label>
                    <div class="container">
                    <select type="text" class="form-control col-sm-9" id="id_outlet" placeholder="" name="id_outlet">
                      @foreach ($outlet as $o)
                      <option value="{{ $o->id }}">{{ $o->nama }}</option>
                       @endforeach
                    </select>
                    </div>
                  </div>
                </div>
      
                <div class="card-body">
                    <div class="form-group">
                      <label class="mt-2" for="jenis">jenis</label>
                      <div class="container">
                      <select type="text" class="form-control col-sm-9" id="jenis"  name="jenis">
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
                      <label class="mt-2" for="nama_paket">nama_paket</label>
                      <div class="container">
                      <input type="text" class="form-control col-sm-9" id="nama_paket" placeholder="" name="nama_paket">
                      </div>
                    </div>
                  </div>


                  <div class="card-body">
                    <div class="form-group">
                      <label class="mt-2" for="harga"> harga</label>
                      <div class="container">
                      <input type="text" class="form-control col-sm-9" id="harga" placeholder="" name="harga">
                      </div>
                    </div>
                  </div>

            </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="btn-submit">Submit</button>
      </div>
    </div>
  </div>
</form>
</div>
