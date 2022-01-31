<table id="tbl-outlet" class="table table-bordered table-hover mt-3">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Tlp</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($outlet as $o)
        <tr>
            <td>{{ $i =(isset($i)?++$i:$i=1) }}</td>
            <td>{{ $o->nama }}</td>
            <td>{{ $o->alamat }}</td>
            <td>{{ $o->tlp }}</td>
            <td>
                @include('outlet.edit')
                <form method="POST" action="{{ route('outlet.destroy', $o->id) }}" style="display:inline">
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