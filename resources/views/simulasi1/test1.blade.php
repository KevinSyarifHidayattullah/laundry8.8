@extends('template/header')

@section('content')
<div class="right_col" role="main">
    {{-- <div class="modal-dialog" role="document">
            <h5 class="modal-title" id="exampleModalLabel">Tambah</h5>
          </div>
          <div class="modal-body">
            <form method="POST" action="simulasi1">
              @csrf
              <div id="method"></div>
                <form method="POST" action="outlet">
                    @csrf
                    <div id="method"></div>
                    <div class="card-body">
                      <div class="form-group">
                        <label for="id">id</label>
                        <div class="container">
                        <input type="text" class="form-control col-sm-9" id="id" placeholder="" name="id">
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                          <label for="nama">Nama</label>
                          <div class="container">
                          <input type="text" class="form-control col-sm-9" id="nama" placeholder="" name="nama">
                          </div>
                        </div>
                      </div>
                   
            <div class="card-body">
                <div class="form-check mt-3 ">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                      Default radio
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label" for="exampleRadios2">
                      Second default radio
                    </label>
                  </div>
                  </
                </div>
                <div class="mt-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
    
            
          </div>
        </div> --}}


<!-- conten header(page header)-->
<section class="conten-header">
  <div class="container-fluid">
    <div class="row mb-2">
    </div>
  </div><!---/.container-fluid-->
</section>

<!--main contain-->
<section>
  <!--form-->
  <div class="card">
    <div class="card-header">
      <h3>form</h3>
    </div>
    <div class="card-body">
      <form id="formKaryawan">
        <div class="form-grup row">
          <label for="id" class="col-sm-2 col-form-label">id</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="id" id="id" placeholder="" required>
          </div>
        </div>
        <div class="form-grup row">
          <label for="nama" class="col-sm-2 col-form-label">nama</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nama" id="nama"  placeholder="" required>
          </div>
        </div>
        <div class="form-grup row">
          <label for="jk" class="col-sm-2 col-form-label">jenis kelamin</label>
          <div class="form-check col-sm-2">
            <input class="form-check-input" type="radio" value="L" name="jk" id="jk">
            <label class="form-check-label" >laki-laki</label>
          </div>
          <div class="form-check col-sm-2">
            <input class="form-check-input" type="radio" value="P" name="jk" id="jk">
            <label class="form-check-label" >Perempuan</label>
          </div>
        </div>
        <div class="form-grup row">
          <label for="nama" class="col-sm-2 col-form-label"></label>
          <div class="col-sm-10">
            <button class="btn btn-primary" id="btnSimpan" type="submit">simpan</button>
            <button class="btn btn-dark" id="btnReset" type="reset">reset</button>
          </div>
        </div>
      
    </div>
  </div>
  </form>
  <!--data-->
  <div class="card">
    <div class="card-header">
      <h3>Data</h3>
    </div>
    <div class="card-body">
      <table class="table table-compact table-stripped table-bordered" id="tblKaryawan" >
        <thead>
          <tr>
            <th>id</th>
            <th>nama</th>
            <th>jenis kelamin</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td colspan="3" align="center"> belm ada data</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>
<!--/.contain-->

@endsection

@push('script')
<script>
  function insert(){
    const data = $('#formKaryawan').serializeArray()
    let newData = {}
    data.forEach(function(item,index){
      let name = item['name']
      let value = (name=='id'? Number(item['value']):item['value'])
      newData[name] = value
    })
    return newData
  }
  $(function(){
    //property
    let dataKaryawan = []

    //events
      $('#formKaryawan').on('submit', function(e){
        e.preventDefault()
        dataKaryawan.push(insert())
        $('#tblKaryawan tbody').html(showData(dataKaryawan))
        console.log(dataKaryawan)
      })
    //end of events
  })

  function showData(arr){
    let row = ''
    if(arr.length == null ){
      return row =  `<tr><td colspan="3">Belum ada data</td></tr>`
    }
    arr.forEach(function(item, index){
      row += `<tr>`
      row += `<td>${item['id']}</td>`
      row += `<td>${item['nama']}</td>`
      row += `<td>${item['jk']}</td>`
      row += `</tr>`
    })
    return row
  }
</script>
@endpush
