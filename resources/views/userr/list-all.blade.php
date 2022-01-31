<table id="tbl-paket" class="table table-bordered table-hover mt-3">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Password</th>
            <th>id_outlet</th>
            <th>Role</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($userr as $u)
        <tr>
            <td>{{ $i =(isset($i)?++$i:$i=1) }}</td>
            <td>{{ $u->nama }}</td>
            <td>{{ $u->username }}</td>
            <td>{{ $u->password }}</td>
            <td>{{ $u->id_outlet }}</td>
            <td>{{ $u->role }}</td>
            <td>
                @include('userr.edit')
                <form method="POST" action="{{ route('userr.destroy', $u->id) }}" style="display:inline">
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