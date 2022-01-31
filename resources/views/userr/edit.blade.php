  {{-- button --}}
  <button type="submit" class="btn delete-user" data-toggle="modal"data-target="#edit{{ $u->id }}">
    <i class="fa fa-pencil-square " style="color: rgb(0, 153, 255)" ></i>
  </button> 

<div class="modal fade" id="edit{{ $u->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">  
      <h5 class="modal-title" id="exampleModalLabel">Update Paket</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form method="post" action="{{ url('userr/'.$u->id) }}">
        @csrf
        @method('PUT')
        <div id="method"></div>
        <div class="card-body">
          <div class="form-group">
            <label class="mt-2" for="nama">Nama</label>
            <div class="container">
            <input type="text" class="form-control col-sm-9" id="nama"  value="{{ $u->nama }}" name="nama">
            </div>
          </div>
        </div>

        <div class="card-body">
            <div class="form-group">
              <label for="username">Username</label>
              <div class="container">
              <input type="text" class="form-control col-sm-9" id="username" value="{{ $u->username }}" name="username">
              </div>
            </div>
          </div>

          <div class="card-body">
            <div class="form-group">
              <label for="password">Password</label>
              <div class="container">
              <input type="text" class="form-control col-sm-9" id="password" value="{{ $u->password }}" name="password">
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
      <button type="sumbit" class="btn btn-primary" id="btn-sumbit">Update</button>
    </div>
  </div>
</div>
</form>
</div>

