<table id="tbl-outlet" class="table table-bordered table-hover mt-3">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Barang</th>
            <th>Merk Barang</th>
            <th>Qty</th>
            <th>kondisi</th>
            <th>tanggal_pengadaan</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($barang as $o)
        <tr>
            <td>{{ $i =(isset($i)?++$i:$i=1) }}</td>
            <td>{{ $o->nama_barang }}</td>
            <td>{{ $o->merk_barang }}</td>
            <td>{{ $o->qty }}</td>
            <td>{{ $o->kondisi }}</td>
            <td>{{ $o->tanggal_pengadaan }}</td>
            <td>
                @include('barang.edit')
                <form method="POST" action="{{ route('barang.destroy', $o->id) }}" style="display:inline" onclick="return confirm('Yakin ingin dihapus?')">
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