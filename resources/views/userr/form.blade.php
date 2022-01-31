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
        <form method="POST" action="userr">
          @csrf
          <div id="method"></div>
          <div class="card-body">
            <div class="form-group">
              <label class="mt-2" for="nama">Nama</label>
              <div class="container">
              <input type="text" class="form-control col-sm-9" id="nama" placeholder="" name="nama">
              </div>
            </div>
          </div>

          <div class="card-body">
              <div class="form-group">
                <label class="mt-2" for="username">Username</label>
                <div class="container">
                <input class="form-control col-sm-5" id="username" name="username">
                </div>
              </div>
            </div>

            <div class="card-body">
              <div class="form-group">
                <label class="mt-2" for="password">Password</label>
                <div class="container">
                <input type="text" class="form-control col-sm-9" id="password" placeholder="" name="password">
                </div>
              </div>
            </div>

            <div class="card-body">
              <div class="form-group">
                <label class="mt-2" for="id_outlet">id_outlet</label>
                <div class="container">
                <input type="text" class="form-control col-sm-9" id="id_outlet" placeholder="" name="id_outlet">
                </div>
              </div>
            </div>

            <div class="card-body">
              <div class="form-group">
                <label class="mt-2" for="role">Role</label>
                <div class="container">
                <select type="text" class="form-control col-sm-9" id="role" placeholder="" name="role">
                  <option value="admin">Admin</option>
                  <option value="kasir">Kasir</option>
                  <option value="owner">Owner</option>
                </select>
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

