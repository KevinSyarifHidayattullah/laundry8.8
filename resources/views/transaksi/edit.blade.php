  {{-- button --}}
  <button type="submit" class="btn btn-outline-success" data-toggle="modal"data-target="#edit{{ $o->id   }}">
    <i class="fa fa-edit "></i>
  </button> 
  
  <div class="modal fade" id="edit{{ $o->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Transaksi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="/{{ request()->segment(1)}}/transaksi/{{ $o->id }}">
            @csrf
            @method('PUT')
            <div id="method"></div>
            <div class="card-body">
              <div class="form-group">
                <label for="id_outlet">id_outlet</label>
                <div class="container">
                <input type="text" class="form-control col-sm-9" id="id_outlet"  value="{{ $o->id_outlet }}" name="id_outlet">
                </div>
              </div>
            </div>
  
            <div class="card-body">
                <div class="form-group">
                  <label for="kode_invoice">kode_invoice</label>
                  <div class="container">
                  <input type="text" class="form-control col-sm-9" id="kode_invoice" value="{{ $o->kode_invoice }}" name="kode_invoice">
                  </div>
                </div>
              </div>

              <div class="card-body">
                <div class="form-group">
                  <label for="id_member">id_member</label>
                  <div class="container">
                  <input type="text" class="form-control col-sm-9" id="id_member" value="{{ $o->id_member }}" name="id_member">
                  </div>
                </div>
              </div>

              <div class="card-body">
                <div class="form-group">
                  <label for="tgl">tgl</label>
                  <div class="container">
                  <input type="text" class="form-control col-sm-9" id="tgl" value="{{ $o->tgl }}" name="tgl">
                  </div>
                </div>
              </div>

              <div class="card-body">
                <div class="form-group">
                  <label for="batas_waktu">batas_waktu</label>
                  <div class="container">
                  <input type="text" class="form-control col-sm-9" id="batas_waktu" value="{{ $o->batas_waktu }}" name="batas_waktu">
                  </div>
                </div>
              </div>

              <div class="card-body">
                <div class="form-group">
                  <label for="tgl_bayar">tgl_bayar</label>
                  <div class="container">
                  <input type="text" class="form-control col-sm-9" id="tgl_bayar" value="{{ $o->tgl_bayar }}" name="tgl_bayar">
                  </div>
                </div>
              </div>

              <div class="card-body">
                <div class="form-group">
                  <label for="biaya_tambahan">biaya_tambahan</label>
                  <div class="container">
                  <input type="text" class="form-control col-sm-9" id="biaya_tambahan" value="{{ $o->biaya_tambahan }}" name="biaya_tambahan">
                  </div>
                </div>
              </div>

              <div class="card-body">
                <div class="form-group">
                  <label for="diskon">diskon</label>
                  <div class="container">
                  <input type="text" class="form-control col-sm-9" id="diskon" value="{{ $o->diskon }}" name="diskon">
                  </div>
                </div>
              </div>

              <div class="card-body">
                <div class="form-group">
                  <label for="pajak">pajak</label>
                  <div class="container">
                  <input type="text" class="form-control col-sm-9" id="pajak" value="{{ $o->pajak }}" name="pajak">
                  </div>
                </div>
              </div>

              <div class="card-body">
                <div class="form-group">
                  <label for="dibayar">Di bayar</label>
                  <div class="container">
                  <select class="form-control col-sm-5" id="dibayar" value="{{ $o->dibayar }}" name="dibayar" name="jenis_kelamin">
                    <option value="dibayar">dibayar</option>
                    <option value="belum_dibayar">belum_dibayar</option>
                </select>
                  </div>
                </div>
              </div>
  
              <div class="card-body">
                <div class="form-group">
                  <label for="id_user">id_user</label>
                  <div class="container">
                  <input type="text" class="form-control col-sm-9" id="id_user" value="{{ $o->id_user }}" name="id_user">
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
  
  