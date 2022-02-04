<table id="tbl-paket" class="table table-bordered table-hover mt-3">
    <thead>
        <tr>
            <th>No</th>
            <th>Id outlet</th>
            <th>Jenis</th>
            <th>Nama Paket</th>
            <th>Harga</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($paket as $p)
        <tr>
            <td>{{ $i =(isset($i)?++$i:$i=1) }}</td>
            <td>{{ $p->id_outlet }}</td>
            <td>{{ $p->jenis }}</td>
            <td>{{ $p->nama_paket }}</td>
            <td>{{ $p->harga }}</td>
            <td>
                @include('paket.edit')
                <form method="POST" action="{{ route('paket.destroy', $p->id) }}" style="display:inline">
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