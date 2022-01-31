<table id="tbl-member" class="table table-bordered table-hover mt-3">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>jenis Kelamin</th>
            <th>Tlp</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($member as $model)
        <tr>
            <td>{{ $i =(isset($i)?++$i:$i=1) }}</td>
            <td>{{ $model->nama }}</td>
            <td>{{ $model->alamat }}</td>
            <td>{{ $model->jenis_kelamin }}</td>
            <td>{{ $model->tlp }}</td>
            <td>
                {{-- <button class="btn edit-member" data-toggle="modal" data-target="#formInputModal"
                    data-mode="edit"
                    data-id="{{$b->id}}"
                    data-nama="{{ $b->nama }}"
                    data-alamat="{{ $b->alamat }}"
                    data-jenis_kelamin="{{ $b->jenis_kelamin }}"
                    data-tlp="{{ $b->tlp }}"
                >
                <i class="fas fa-edit"></i>
                </button> --}}
                @include('member.edit')
                <form method="POST" action="{{ route('member.destroy', $model->id) }}" style="display:inline">
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