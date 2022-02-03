  {{-- button --}}
  <button type="submit" class="btn delete" data-toggle="modal"data-target="#edit{{ $model->id }}">
    <i class="fa fa-edit " style="color: rgb(0, 153, 255)" ></i>
  </button> 
  
  <div class="modal fade" id="edit{{ $model->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Member</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="{{ url('member/'.$model->id) }}">
            @csrf
            @method('PUT')
            <div id="method"></div>
            <div class="card-body">
              <div class="form-group">
                <label for="nama">Nama</label>
                <div class="container">
                <input type="text" class="form-control col-sm-9" id="nama"  value="{{ $model->nama }}" name="nama">
                </div>
              </div>
            </div>
  
            <div class="card-body">
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <div class="container">
                  <input type="text" class="form-control col-sm-9" id="alamat" value="{{ $model->alamat }}" name="alamat">
                  </div>
                </div>
              </div>

              <div class="card-body">
                <div class="form-group">
                  <label for="jenis_kelamin">Jenis kelamin</label>
                  <div class="container">
                  <select class="form-control col-sm-5" id="jenis_kelamin" value="{{ $model->jenis_kelamin }}" name="jenis_kelamin" name="jenis_kelamin">
                    <option value="L">L</option>
                    <option value="P">P</option>
                </select>
                  </div>
                </div>
              </div>
  
              <div class="card-body">
                <div class="form-group">
                  <label for="tlp">No Telp</label>
                  <div class="container">
                  <input type="text" class="form-control col-sm-9" id="tlp" value="{{ $model->tlp }}" name="tlp">
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
  
  