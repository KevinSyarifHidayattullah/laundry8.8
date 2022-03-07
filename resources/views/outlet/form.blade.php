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
          <form method="POST" action="outlet">
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
                  <label class="mt-2" for="tlp">No Tlp</label>
                  <div class="container">
                  <input type="text" class="form-control col-sm-9" id="tlp" placeholder="" name="tlp">
                  </div>
                </div>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
          <button type="sumbit" class="btn btn-success" id="btn-sumbit">Tambah</button>
        </div>
      </div>
    </div>
  </form>
  </div>



  <div class="modal fade" id="formImport" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> import data outlet</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{ url(request()->segment(1).'/outlet/import') }}" enctype="multopart/form-data">
            @csrf
              <div class="card-body">
                <div class="form-grup">
                  <label for="nama">file excel</label>
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


  

{{-- <div class="modal fade" id="formImport" tabindex="-1" role="dialog" aria-labelledby="exampleModalLebel"
  aria-hidden="true">
  <div class="modal_dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> import data outlet</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ url(request()->segment(1).'outlet/import') }}" enctype="multopart/form-data">
          @csrf
            <div class="card-body">
              <div class="form-grup">
                <label for="jenis">file excel</label>
                <input type="file" name="import" id="import">
              </div>
            </div>
        
      </div>
      <div class="moda-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Upload</button>
      </div>
    </div>
  </div>
</form>
</div> --}}
  