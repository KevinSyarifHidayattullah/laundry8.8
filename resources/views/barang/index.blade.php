@extends('template/header')

@section('content')
<div class="right_col" role="main">
    <div class="card">
        <div class="card-header">
            <h2 class="card-title"><a class="fa fa-table" style="color: rgb(106, 117, 107)"></a> Data Outlet</h2>
       </div>
            <div class="card-body mt-3">
                <button type="button" class="btn btn-warning" data-toggle="modal"
                    data-target="#formInputModal">
                    <a class="fa fa-plus-square"> Tambah Barang</a>
                </button>

                <a href="{{ route('export-barang') }}" class="btn btn-success"> 
                    <li class=" fa fa-file-excel"></li>Export
                </a>

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formImport" >
                    <li class="fa fa-medkit"></li> Import
                </button>

                <div class="modal fade" id="formImport" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel"> Import Data Paket</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form method="POST" action="{{ route('import-barang') }}" enctype="multopart/form-data">
                            @csrf
                              <div class="card-body">
                                <div class="form-grup">
                                  <label for="jenis">file excel</label>
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
                

                <div>
                    @include('barang/list-all')
                </div>
            </div>
          <div style="margin-top:20px">
            @if (session('success'))
            <div class="alert alert-success" role="alert" id="success-alert">
                {{ session('success') }}
            <button type="button" class="close" data-dissmiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @endif
            @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dissmiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <ul>
                    @foreach ($errors->all() as $errors)
                    <li>{{ $errors }}</li>    
                    @endforeach
                </ul>
            </div>
                
            @endif    
        </div>

        
        
       <script>
           $(function(){
               //data Table
               $('tbl-outlet').DataTable()

               //menghapus alert
               $("#succes-alert").fadeTo(2000, 500).slideUp(500, function(){
                   $("#succes-alert").slideUp(500);
               });
               $("#error-alert").fadeTo(2000, 500).slideUp(500, function(){
                   $("#succes-alert").slideUp(500);
               });

               $('#edit').on('show.bs.modal', function (event){
                   var button = $(event.relatedTarget)
                   var nama = button.data('mynama')
                   var alamat = button.data('myalamat')
                   var tlp = button.data('mytlp')

                   var modal =$(this)
                   modal.find('.modal-body #nama').val(nama);
                   modal.find('.modal-body #alamat').val(alamat);
                   modal.find('.modal-body #tlp').val(tlp);
               })

               //delete outlet
               $('.delete-outlet').click(function(e){
                   e.prevenDefault()
                   let data = $(this).closest('tr').find('td:eq(1)').text()
                   swal({
                       title ="Apakah kamu yakin?",
                       text ="Data"+data+"akan dihapus?",
                       icon ="waring",
                       buttons = true,
                       dangermode = true,
                   })
                   .then((req) => {
                       if(req) $(e.target).closest('form').submit()
                       else swal.close()
                   })
               })
           })
       </script>
     
</div> 
</div>
@include('barang/form')
@endsection