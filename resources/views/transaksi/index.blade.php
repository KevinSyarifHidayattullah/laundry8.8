@extends('template/header')
@section('content')

<div class="right_col" role="main">
    <div class="card">
        <div class="card-header">
            <h2 class="card-title"><a class="fa fa-table" style="color: rgb(106, 117, 107)"></a> Transaksi</h2>
       </div>
    <!-- Default box -->

    <section class="content-header">
        <div class="container-fluid"></div>
    </section>

    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" id="nav-data" data-toggle="collapse" href="#dataLaundry" role="button" 
            aria-expanded="false" aria-controls="multiCollapseExample1">Data Laundry</a> {{-- Collapse --}}
        </li>
        <li class="nav-item">
            <a class="nav-link" id="nav-form" data-toggle="collapse" href="#formLaundry" role="button" 
            aria-expanded="false" aria-controls="multiCollapse">&nbsp;&nbsp; Cucian Baru</a>
        </li>
      </ul>
    <div class="card" style="border-top:0px"> {{-- Card --}}
        @if ($errors->any())
        <div class="card-body">
            <div class="alert alert-danger alert-dismissible fade show" role="alert" >
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        @endif
    </div>

    @if (session('success'))
        <div class="alert alert-success" role="alert" id="success-alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </div>        
    @endif
    <form method="post" action="{{ url(request()->segment(1).'/transaksi') }}">
        @csrf
        @include('transaksi.form')
        <input type="hidden" name="id_member" id="id_member">
    </form>
    @include('transaksi.data')




    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@push('script')
<script>
    // Script untuk# Menu data dan form transaksi
    // $('#dataLaundry').collapse('show')

    $('#dataLaundry').on('show.bs.collapse', function(){
        $('#formLaundry').collapse('hide');
        $('#nav-form').removeClass('active');
        $('#nav-data').addClass('active');
    })

    $('#formLaundry').on('show.bs.collapse', function(){
        $('#dataLaundry').collapse('hide');
        $('#nav-data').removeClass('active');
        $('#nav-form').addClass('active');
    })
    //end #menu
    // Initialize
    let subtotal = total = 0;
    $(function(){
        $('#tblMember').DataTable();
    })
    //end initialize

    // Pemilihan member
    $('#tblMember').on('click', '.pilihMemberBtn', function(){
        pilihMember(this)
        $('#modalMember').modal('hide')
    })
    //

    // Pemilihan Paket
    $('#tblPaket').on('click', '.pilihPaketBtn', function(){
        pilihPaket(this)
        $('#modalPaket').modal('hide')
    })
    //
    //Function pilih Member
    function pilihMember(x){
        const tr = $(x).closest('tr')
        const namaJk = tr.find('td:eq(1)').text()+"/"+tr.find('td:eq(2)').text()
        const biodata = tr.find('td:eq(4)').text()+"/"+tr.find('td:eq(3)').text()
        const idMember = tr.find('.idMember').val()
        $('#nama-pelanggan').text(namaJk)
        $('#biodata-pelanggan').text(biodata)
        $('#id_member').val(idMember)
    }
    //

    //Function pilih Paket
    function pilihPaket(x){
        const tr = $(x).closest('tr')
        const namaPaket = tr.find('td:eq(1)').text()
        const harga = tr.find('td:eq(2)').text()
        const idPaket = tr.find('.idPaket').val()

        let data = ''
        let tbody = $('#tblTransaksi tbody tr td').text()
        data += '<tr>'
        data += `<td class="text-center"> ${namaPaket} </td>`
        data += `<td class="text-center"> ${harga}</td>`;
        data += `<input type="hidden" name="id_paket[]" value="${idPaket}">`
        data += `<td class="text-center"><input type="number" value="1" min="1" class="qty" name="qty[]" size="2" style="width:40px"></td>`;
        data += `<td class="text-center"><label name="sub_total[]" class="subTotal">${harga}</label></td>`;
        data += `<td class="text-center"><button type="button" class="btnRemovePaket"><span class="fas fa-times-circle"></span></button></td>`;
        data += '</tr>';

        if(tbody == 'Belum ada data') $('#tblTransaksi tbody tr ').remove();

        $('#tblTransaksi tbody').append(data);

        subtotal += Number(harga)
        total = subtotal - Number($('#diskon').val()) + Number($('#pajak-harga').val())
        $('#subtotal').text(subtotal)
        $('#total').text(total)
    }
    //function hitung total 
    function hitungTotalAkhir(a){
        let qty = Number($(a).closest('tr').find('.qty').val());
        let harga = Number($(a).closest('tr').find('td:eq(1)').text());
        let subTotalAwal = Number($(a).closest('tr').find('.subTotal').text());
        let count = qty * harga;
        subtotal = subtotal - subTotalAwal + count
        total = subtotal - Number($('#diskon').val()) + Number($('#pajak-harga').val())
        $(a).closest('tr').find('.subTotal').text(count)
        $('#subtotal').text(subtotal)
        $('#total').text(total)
    }
    //

    // onchange qty
    $('#tblTransaksi').on('change','.qty', function(){
        hitungTotalAkhir(this)
    })

    //remove paket
    $('#tblTransaksi').on('click','.btnRemovePaket',function(){
        let subTotalAwal = parseFloat($(this).closest('tr').find('.subTotal').text());
        subtotal -= subTotalAwal
        total -= subTotalAwal;

        $currentRow = $(this).closest('tr').remove();
        $('#subtotal').text(subtotal)
        $('#total').text(total)
    })
</script>
@endpush