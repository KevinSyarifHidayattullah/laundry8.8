<div class="modal fade" id="formInputModal{{ $u->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mengubah Data Userr</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form method="POST" action="{{ url('userr/'.$u->id) }}">
          @csrf @method('put')
          <div id="method"> </div>
          <div class="card-body">
            <div class="card-body">
              <div class="form-group">
                <label for="name">name</label>
                <div class="container">
                <input type="text" class="form-control col-sm-9" id="name" value="{{ $u->name }}" name="name">
                </div>
              </div>
            </div>

                  <div class="card-body">
                    <div class="form-group">
                      <label for="email"> email</label>
                      <div class="container">
                      <input type="text" class="form-control col-sm-9" id="email" value="{{ $u->email }}" name="email">
                      </div>
                    </div>
                  </div>  

                  <div class="card-body">
                    <div class="form-group">
                      <label for="id_outlet">id_outlet</label>
                      <div class="container">
                      <input type="text" class="form-control col-sm-9" id="id_outlet" value="{{ $u->id_outlet }}" name="id_outlet">
                      </div>
                    </div>
                  </div>

                  <div class="card-body">
                    <div class="form-group">
                      <label for="role">Role</label>
                      <div class="container">
                      <select type="text" class="form-control col-sm-9" id="role" value="{{ $u->role }}" name="role">
                        <option value="admin">admin</option>
                        <option value="kasir">kasir</option>
                        <option value="owner">owner</option>
                      </select>
                      </div>
                    </div>
                  </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" id="btn-submit">Submit</button>
      </div>
    </div>
  </div>
</form>
</div>
