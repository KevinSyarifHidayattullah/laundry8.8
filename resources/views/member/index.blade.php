@extends('template/header')

@section('content')
<div class="right_col" role="main">
    <div class="card">
        <div class="card-header">
            <h2 class="card-title"><a class="fa fa-table" style="color: rgb(106, 117, 107)"></a> Data Member</h2>
       </div>
            <div class="card-body mt-3">
                <button type="button" class="btn btn-warning" data-toggle="modal"
                    data-target="#formInputModal">
                    <a class="fa fa-plus-square"> Tambah Member</a>
                </button>
                <div>
                    @include('member/list-all')
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
@include('member.form')
@endsection