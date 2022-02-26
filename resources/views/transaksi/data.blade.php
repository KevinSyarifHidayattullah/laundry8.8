<div class="collapse" id="dataLaundry">
  <div class="card-body">
    <h4>Transaksi Data</h4>
    <table id="tbl-transaksi" class="table table-bordered table-hover mt-3">
      <thead>
          <tr>
              <th>No.</th>
              <th>id outlet</th>
              <th>kode invoice</th>
              <th>id member</th>
              <th>batas waktu</th>
              <th>tgl bayar</th>
              <th>biaya tambahan</th>
              <th>diskon</th>
              <th>pajak</th>
              <th>di bayar</th>
              <th>id user</th>
              <th colspan="2">Action</th>
          </tr>
      </thead>
      <tbody>
          @foreach ($transaksi as $o)
          <tr>
              <td>{{ $i =(isset($i)?++$i:$i=1) }}</td>
              <td>{{ $o->id_outlet }}</td>
              <td>{{ $o->kode_invoice }}</td>
              <td>{{ $o->id_member }}</td>
              <td>{{ $o->batas_waktu }}</td>
              <td>{{ $o->tgl_bayar }}</td>
              <td>{{ $o->biaya_tambahan }}</td>
              <td>{{ $o->diskon }}</td>
              <td>{{ $o->pajak }}</td>
              <td>{{ $o->dibayar }}</td>
              <td>{{ $o->id_user }}</td>
              <td>
                  @include('transaksi.edit')
                  <form method="POST" action="/{{ request()->segment(1) }}/transaksi/{{ $o->id }}" style="display:inline" onclick="return confirm('Yakin ingin dihapus?')">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      <button type="submit" class="btn delete-user">
                          <a href="" class="tittle"><i class="fa fa-trash " style="color: red" ></i></a>
                      </button> &nbsp;
                  </form>
              </td>
          </tr>
          @endforeach
      </tbody>
  </table>
  </div>
</div>





{{-- 
<!-- Modal Member-->
<div class="modal fade" id="member" tabindex="-1" aria-labelledby="memberLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="memberLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <table id="tbl-member" class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>jenis Kelamin</th>
                        <th>Tlp</th>
                        <th>Id Member</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($member as $model)
                    <tr>
                        <td>{{ $i =(isset($i)?++$i:$i=1) }}</td>
                        <td>{{ $model->nama }}</td>
                        <td>{{ $model->alamat }}</td>
                        <td>{{ $model->jenis_kelamin }}</td>
                        <td>{{ $model->tlp }}</td>
                        <td>{{ $model->id }}</td>
                        <td>
                            <button type="button" class="PilihMember btn btn-outline-info">Pilih</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

      </div>
    </div>
  </div>
  <!-- and moal member-->
 --}}
