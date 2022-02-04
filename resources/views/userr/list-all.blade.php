<table id="tbl-paket_cucian" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>nama</th>
            <th>username</th>
            <th> password</th>
            <th>id_outlet</th>
            <th>role</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($userr as $p)
        <tr>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->username }}</td>
            <td>{{ $p->password }}</td>
            <td>{{ $p->id_outlet }}</td>
            <td>{{ $p->role }}</td>
            <td>

                <button type="submit" class="btn btn-outline-primary" data-toggle="modal" data-target="#formInputModal{{ $p->id }}">
                    <i class="fa fa-edit " style="color: rgb(0, 153, 255)" ></i>
                </button>


                <!--delete data-->
                <form method="POST" action="{{ route('userr.destroy', $p->id) }}" style="display:inline" class="d-inline">
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
