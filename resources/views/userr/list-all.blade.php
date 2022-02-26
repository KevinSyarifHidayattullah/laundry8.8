<table id="tbl-paket_cucian" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>nama</th>
            <th>email</th>
            <th>id_outlet</th>
            <th>role</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($userr as $u)
        <tr>
            <td>{{ $i =(isset($i)?++$i:$i=1) }}</td>
            <td>{{ $u->name }}</td>
            <td>{{ $u->email }}</td>
            <td>{{ $u->id_outlet }}</td>
            <td>{{ $u->role }}</td>
            <td>

                <button type="submit" class="btn btn-outline-success" data-toggle="modal" data-target="#formInputModal{{ $u->id }}">
                    <i class="fa fa-edit " ></i>
                </button>


                <!--delete data-->
                <form method="POST" action="{{ route('userr.destroy', $u->id) }}" style="display:inline" class="d-inline">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="text-secondary font-weight-bold text-xs border-5 btn delete-outlet" onclick="return confirm('Yakin ingin dihapus?')">
                        <a href="" class="tittle"><i class="fa fa-trash " style="color: red" ></i></a>
                    </button>

                </form>
            </td>
        </tr>


    </tbody>
    @include('userr/edit')
    @endforeach
</table>
